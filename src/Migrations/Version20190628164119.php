<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190628164119 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE unit_types DROP FOREIGN KEY FK_D202F73B35CFEE3C');
        $this->addSql('ALTER TABLE unit_types DROP FOREIGN KEY FK_D202F73BA6A507E');
        $this->addSql('ALTER TABLE stars DROP FOREIGN KEY FK_11DC02CC54C8C93');
        $this->addSql('DROP TABLE abilities');
        $this->addSql('DROP TABLE icons');
        $this->addSql('DROP TABLE unit_types');
        $this->addSql('DROP INDEX UNIQ_11DC02CC54C8C93 ON stars');
        $this->addSql('ALTER TABLE stars DROP type_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE abilities (id INT AUTO_INCREMENT NOT NULL, name_abil VARCHAR(20) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE icons (id INT AUTO_INCREMENT NOT NULL, image VARCHAR(20) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE unit_types (id INT AUTO_INCREMENT NOT NULL, ability INT NOT NULL, icons INT NOT NULL, caliber INT NOT NULL, armor INT NOT NULL, name VARCHAR(40) NOT NULL COLLATE utf8mb4_unicode_ci, price INT NOT NULL, UNIQUE INDEX UNIQ_D202F73B35CFEE3C (ability), UNIQUE INDEX UNIQ_D202F73BA6A507E (icons), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE unit_types ADD CONSTRAINT FK_D202F73B35CFEE3C FOREIGN KEY (ability) REFERENCES abilities (id)');
        $this->addSql('ALTER TABLE unit_types ADD CONSTRAINT FK_D202F73BA6A507E FOREIGN KEY (icons) REFERENCES icons (id)');
        $this->addSql('ALTER TABLE stars ADD type_id INT NOT NULL');
        $this->addSql('ALTER TABLE stars ADD CONSTRAINT FK_11DC02CC54C8C93 FOREIGN KEY (type_id) REFERENCES unit_types (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_11DC02CC54C8C93 ON stars (type_id)');
    }
}

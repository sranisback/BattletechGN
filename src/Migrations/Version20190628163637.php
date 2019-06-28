<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190628163637 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE abilities (id INT AUTO_INCREMENT NOT NULL, name_abil VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE clusters (id INT AUTO_INCREMENT NOT NULL, galaxy INT NOT NULL, name VARCHAR(40) DEFAULT NULL, INDEX IDX_EC895D3FF6BB1376 (galaxy), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commanders (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(40) NOT NULL, faction VARCHAR(40) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE galaxies (id INT AUTO_INCREMENT NOT NULL, commander INT NOT NULL, name VARCHAR(40) NOT NULL, UNIQUE INDEX UNIQ_71A267FE42D318BA (commander), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE icons (id INT AUTO_INCREMENT NOT NULL, image VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE novas (id INT AUTO_INCREMENT NOT NULL, cluster INT NOT NULL, name VARCHAR(40) DEFAULT NULL, INDEX IDX_66F3B7E6E5C56994 (cluster), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stars (id INT AUTO_INCREMENT NOT NULL, type_id INT NOT NULL, nova INT NOT NULL, integrity INT NOT NULL, level INT NOT NULL, UNIQUE INDEX UNIQ_11DC02CC54C8C93 (type_id), INDEX IDX_11DC02CFAE65C8F (nova), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE unit_types (id INT AUTO_INCREMENT NOT NULL, ability INT NOT NULL, icons INT NOT NULL, caliber INT NOT NULL, armor INT NOT NULL, name VARCHAR(40) NOT NULL, price INT NOT NULL, UNIQUE INDEX UNIQ_D202F73B35CFEE3C (ability), UNIQUE INDEX UNIQ_D202F73BA6A507E (icons), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE clusters ADD CONSTRAINT FK_EC895D3FF6BB1376 FOREIGN KEY (galaxy) REFERENCES galaxies (id)');
        $this->addSql('ALTER TABLE galaxies ADD CONSTRAINT FK_71A267FE42D318BA FOREIGN KEY (commander) REFERENCES commanders (id)');
        $this->addSql('ALTER TABLE novas ADD CONSTRAINT FK_66F3B7E6E5C56994 FOREIGN KEY (cluster) REFERENCES clusters (id)');
        $this->addSql('ALTER TABLE stars ADD CONSTRAINT FK_11DC02CC54C8C93 FOREIGN KEY (type_id) REFERENCES unit_types (id)');
        $this->addSql('ALTER TABLE stars ADD CONSTRAINT FK_11DC02CFAE65C8F FOREIGN KEY (nova) REFERENCES novas (id)');
        $this->addSql('ALTER TABLE unit_types ADD CONSTRAINT FK_D202F73B35CFEE3C FOREIGN KEY (ability) REFERENCES abilities (id)');
        $this->addSql('ALTER TABLE unit_types ADD CONSTRAINT FK_D202F73BA6A507E FOREIGN KEY (icons) REFERENCES icons (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE unit_types DROP FOREIGN KEY FK_D202F73B35CFEE3C');
        $this->addSql('ALTER TABLE novas DROP FOREIGN KEY FK_66F3B7E6E5C56994');
        $this->addSql('ALTER TABLE galaxies DROP FOREIGN KEY FK_71A267FE42D318BA');
        $this->addSql('ALTER TABLE clusters DROP FOREIGN KEY FK_EC895D3FF6BB1376');
        $this->addSql('ALTER TABLE unit_types DROP FOREIGN KEY FK_D202F73BA6A507E');
        $this->addSql('ALTER TABLE stars DROP FOREIGN KEY FK_11DC02CFAE65C8F');
        $this->addSql('ALTER TABLE stars DROP FOREIGN KEY FK_11DC02CC54C8C93');
        $this->addSql('DROP TABLE abilities');
        $this->addSql('DROP TABLE clusters');
        $this->addSql('DROP TABLE commanders');
        $this->addSql('DROP TABLE galaxies');
        $this->addSql('DROP TABLE icons');
        $this->addSql('DROP TABLE novas');
        $this->addSql('DROP TABLE stars');
        $this->addSql('DROP TABLE unit_types');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231025093645 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE participant_entity');
        $this->addSql('ALTER TABLE user ADD COLUMN is_verified BOOLEAN NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE participant_entity (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_participant INTEGER NOT NULL, nom VARCHAR(255) NOT NULL COLLATE "BINARY", prenom VARCHAR(255) NOT NULL COLLATE "BINARY", mail VARCHAR(255) NOT NULL COLLATE "BINARY", telephone INTEGER NOT NULL, mot_de_passe VARCHAR(255) NOT NULL COLLATE "BINARY", administrateur BOOLEAN NOT NULL, actif BOOLEAN NOT NULL)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__user AS SELECT id, email, roles, password, nom, prenom, telephone, actif FROM user');
        $this->addSql('DROP TABLE user');
        $this->addSql('CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles CLOB NOT NULL --(DC2Type:json)
        , password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, telephone VARCHAR(10) NOT NULL, actif BOOLEAN NOT NULL)');
        $this->addSql('INSERT INTO user (id, email, roles, password, nom, prenom, telephone, actif) SELECT id, email, roles, password, nom, prenom, telephone, actif FROM __temp__user');
        $this->addSql('DROP TABLE __temp__user');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
    }
}

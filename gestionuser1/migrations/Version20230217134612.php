<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230217134612 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE utilisateur ADD nom VARCHAR(255) NOT NULL, ADD prenom VARCHAR(255) NOT NULL, ADD adresse VARCHAR(255) NOT NULL, ADD telephone INT NOT NULL, ADD date_de_naissance DATE NOT NULL, ADD genre VARCHAR(255) NOT NULL, ADD poids DOUBLE PRECISION DEFAULT NULL, ADD taille DOUBLE PRECISION DEFAULT NULL, ADD experience INT DEFAULT NULL, ADD specialite VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE utilisateur DROP nom, DROP prenom, DROP adresse, DROP telephone, DROP date_de_naissance, DROP genre, DROP poids, DROP taille, DROP experience, DROP specialite');
    }
}

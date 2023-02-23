<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230223133826 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE video ADD seance_id INT NOT NULL');
        $this->addSql('ALTER TABLE video ADD CONSTRAINT FK_7CC7DA2CE3797A94 FOREIGN KEY (seance_id) REFERENCES seance (id)');
        $this->addSql('CREATE INDEX IDX_7CC7DA2CE3797A94 ON video (seance_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE video DROP FOREIGN KEY FK_7CC7DA2CE3797A94');
        $this->addSql('DROP INDEX IDX_7CC7DA2CE3797A94 ON video');
        $this->addSql('ALTER TABLE video DROP seance_id');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230916123824 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849559A4AA658 FOREIGN KEY (guest_id) REFERENCES `guest` (id)');
        $this->addSql('CREATE INDEX IDX_42C849559A4AA658 ON reservation (guest_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849559A4AA658');
        $this->addSql('DROP INDEX IDX_42C849559A4AA658 ON reservation');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230510200953 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation DROP time, CHANGE slot_id slot_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495559E5119C FOREIGN KEY (slot_id) REFERENCES slot (id)');
        $this->addSql('CREATE INDEX IDX_42C8495559E5119C ON reservation (slot_id)');
        $this->addSql('ALTER TABLE slot DROP date');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495559E5119C');
        $this->addSql('DROP INDEX IDX_42C8495559E5119C ON reservation');
        $this->addSql('ALTER TABLE reservation ADD time TIME NOT NULL, CHANGE slot_id slot_id INT NOT NULL');
        $this->addSql('ALTER TABLE slot ADD date DATE NOT NULL');
    }
}

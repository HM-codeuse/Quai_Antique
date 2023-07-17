<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230717085355 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `table` DROP FOREIGN KEY FK_F6298F4659E5119C');
        $this->addSql('DROP INDEX IDX_F6298F4659E5119C ON `table`');
        $this->addSql('ALTER TABLE `table` DROP slot_id, DROP date');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `table` ADD slot_id INT DEFAULT NULL, ADD date DATE NOT NULL');
        $this->addSql('ALTER TABLE `table` ADD CONSTRAINT FK_F6298F4659E5119C FOREIGN KEY (slot_id) REFERENCES slot (id)');
        $this->addSql('CREATE INDEX IDX_F6298F4659E5119C ON `table` (slot_id)');
    }
}

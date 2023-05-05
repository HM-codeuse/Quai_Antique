<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230505132529 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE opening_hours ADD lunch_service VARCHAR(255) NOT NULL, ADD evening_service VARCHAR(255) NOT NULL, DROP hour_of_opening, DROP hour_of_closing');
        $this->addSql('ALTER TABLE `table` DROP FOREIGN KEY FK_F6298F46A76ED395');
        $this->addSql('ALTER TABLE `table` DROP FOREIGN KEY FK_F6298F46B83297E7');
        $this->addSql('DROP INDEX IDX_F6298F46B83297E7 ON `table`');
        $this->addSql('DROP INDEX IDX_F6298F46A76ED395 ON `table`');
        $this->addSql('ALTER TABLE `table` DROP user_id, DROP reservation_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE opening_hours ADD hour_of_opening DATETIME NOT NULL, ADD hour_of_closing DATETIME NOT NULL, DROP lunch_service, DROP evening_service');
        $this->addSql('ALTER TABLE `table` ADD user_id INT DEFAULT NULL, ADD reservation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE `table` ADD CONSTRAINT FK_F6298F46A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE `table` ADD CONSTRAINT FK_F6298F46B83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id)');
        $this->addSql('CREATE INDEX IDX_F6298F46B83297E7 ON `table` (reservation_id)');
        $this->addSql('CREATE INDEX IDX_F6298F46A76ED395 ON `table` (user_id)');
    }
}

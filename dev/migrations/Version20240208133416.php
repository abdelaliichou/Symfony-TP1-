<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240208133416 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE atricle ADD COLUMN title VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE atricle ADD COLUMN description VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__atricle AS SELECT id FROM atricle');
        $this->addSql('DROP TABLE atricle');
        $this->addSql('CREATE TABLE atricle (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL)');
        $this->addSql('INSERT INTO atricle (id) SELECT id FROM __temp__atricle');
        $this->addSql('DROP TABLE __temp__atricle');
    }
}

<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181130132148 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE rolle (id INT AUTO_INCREMENT NOT NULL, bezeichnung VARCHAR(50) NOT NULL, UNIQUE INDEX UNIQ_932820DF311066A2 (bezeichnung), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(50) NOT NULL, password VARCHAR(255) NOT NULL, email VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_rolle (user_id INT NOT NULL, rolle_id INT NOT NULL, INDEX IDX_71EADB87A76ED395 (user_id), INDEX IDX_71EADB8740A53BF6 (rolle_id), PRIMARY KEY(user_id, rolle_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_rolle ADD CONSTRAINT FK_71EADB87A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_rolle ADD CONSTRAINT FK_71EADB8740A53BF6 FOREIGN KEY (rolle_id) REFERENCES rolle (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user_rolle DROP FOREIGN KEY FK_71EADB8740A53BF6');
        $this->addSql('ALTER TABLE user_rolle DROP FOREIGN KEY FK_71EADB87A76ED395');
        $this->addSql('DROP TABLE rolle');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_rolle');
    }
}

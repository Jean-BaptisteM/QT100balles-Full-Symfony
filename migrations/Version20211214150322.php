<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211214150322 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE comment_item (id INT AUTO_INCREMENT NOT NULL, users_id INT DEFAULT NULL, items_id INT DEFAULT NULL, parent_id INT DEFAULT NULL, content LONGTEXT NOT NULL, image VARCHAR(255) DEFAULT NULL, user_rate SMALLINT DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_392D87F267B3B43D (users_id), INDEX IDX_392D87F26BB0AE84 (items_id), INDEX IDX_392D87F2727ACA70 (parent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment_media (id INT AUTO_INCREMENT NOT NULL, users_id INT DEFAULT NULL, medias_id INT DEFAULT NULL, parent_id INT DEFAULT NULL, content LONGTEXT NOT NULL, image VARCHAR(255) DEFAULT NULL, user_rate SMALLINT DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_C3B639FD67B3B43D (users_id), INDEX IDX_C3B639FDC7F4A74B (medias_id), INDEX IDX_C3B639FD727ACA70 (parent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE item (id INT AUTO_INCREMENT NOT NULL, item_categories_id INT DEFAULT NULL, user_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, year SMALLINT DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, preface LONGTEXT NOT NULL, video VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', slug VARCHAR(255) DEFAULT NULL, INDEX IDX_1F1B251E4EBEBC6C (item_categories_id), INDEX IDX_1F1B251EA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE item_category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(64) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE media (id INT AUTO_INCREMENT NOT NULL, media_categories_id INT DEFAULT NULL, user_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, year SMALLINT NOT NULL, duration SMALLINT DEFAULT NULL, nb_season SMALLINT DEFAULT NULL, nb_episode SMALLINT DEFAULT NULL, duration_episode SMALLINT DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, preface LONGTEXT DEFAULT NULL, synopsis LONGTEXT DEFAULT NULL, summary LONGTEXT NOT NULL, anecdote LONGTEXT DEFAULT NULL, trailer VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', slug VARCHAR(255) DEFAULT NULL, original_title VARCHAR(255) DEFAULT NULL, INDEX IDX_6A2CA10C46752A16 (media_categories_id), INDEX IDX_6A2CA10CA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE media_person (media_id INT NOT NULL, person_id INT NOT NULL, INDEX IDX_88A54BA8EA9FDD75 (media_id), INDEX IDX_88A54BA8217BBB47 (person_id), PRIMARY KEY(media_id, person_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE media_type (media_id INT NOT NULL, type_id INT NOT NULL, INDEX IDX_4F9988FAEA9FDD75 (media_id), INDEX IDX_4F9988FAC54C8C93 (type_id), PRIMARY KEY(media_id, type_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE media_category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(64) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE person (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(64) NOT NULL, lastname VARCHAR(64) DEFAULT NULL, birthdate DATE DEFAULT NULL, nationality VARCHAR(64) DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, category VARCHAR(64) DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(64) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nickname VARCHAR(180) NOT NULL, email VARCHAR(180) NOT NULL, image VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, charte TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649A188FE64 (nickname), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_media (user_id INT NOT NULL, media_id INT NOT NULL, INDEX IDX_88EE5A54A76ED395 (user_id), INDEX IDX_88EE5A54EA9FDD75 (media_id), PRIMARY KEY(user_id, media_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_item (user_id INT NOT NULL, item_id INT NOT NULL, INDEX IDX_659A69D7A76ED395 (user_id), INDEX IDX_659A69D7126F525E (item_id), PRIMARY KEY(user_id, item_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comment_item ADD CONSTRAINT FK_392D87F267B3B43D FOREIGN KEY (users_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE comment_item ADD CONSTRAINT FK_392D87F26BB0AE84 FOREIGN KEY (items_id) REFERENCES item (id)');
        $this->addSql('ALTER TABLE comment_item ADD CONSTRAINT FK_392D87F2727ACA70 FOREIGN KEY (parent_id) REFERENCES comment_item (id)');
        $this->addSql('ALTER TABLE comment_media ADD CONSTRAINT FK_C3B639FD67B3B43D FOREIGN KEY (users_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE comment_media ADD CONSTRAINT FK_C3B639FDC7F4A74B FOREIGN KEY (medias_id) REFERENCES media (id)');
        $this->addSql('ALTER TABLE comment_media ADD CONSTRAINT FK_C3B639FD727ACA70 FOREIGN KEY (parent_id) REFERENCES comment_media (id)');
        $this->addSql('ALTER TABLE item ADD CONSTRAINT FK_1F1B251E4EBEBC6C FOREIGN KEY (item_categories_id) REFERENCES item_category (id)');
        $this->addSql('ALTER TABLE item ADD CONSTRAINT FK_1F1B251EA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10C46752A16 FOREIGN KEY (media_categories_id) REFERENCES media_category (id)');
        $this->addSql('ALTER TABLE media ADD CONSTRAINT FK_6A2CA10CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE media_person ADD CONSTRAINT FK_88A54BA8EA9FDD75 FOREIGN KEY (media_id) REFERENCES media (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE media_person ADD CONSTRAINT FK_88A54BA8217BBB47 FOREIGN KEY (person_id) REFERENCES person (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE media_type ADD CONSTRAINT FK_4F9988FAEA9FDD75 FOREIGN KEY (media_id) REFERENCES media (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE media_type ADD CONSTRAINT FK_4F9988FAC54C8C93 FOREIGN KEY (type_id) REFERENCES type (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_media ADD CONSTRAINT FK_88EE5A54A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_media ADD CONSTRAINT FK_88EE5A54EA9FDD75 FOREIGN KEY (media_id) REFERENCES media (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_item ADD CONSTRAINT FK_659A69D7A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_item ADD CONSTRAINT FK_659A69D7126F525E FOREIGN KEY (item_id) REFERENCES item (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment_item DROP FOREIGN KEY FK_392D87F2727ACA70');
        $this->addSql('ALTER TABLE comment_media DROP FOREIGN KEY FK_C3B639FD727ACA70');
        $this->addSql('ALTER TABLE comment_item DROP FOREIGN KEY FK_392D87F26BB0AE84');
        $this->addSql('ALTER TABLE user_item DROP FOREIGN KEY FK_659A69D7126F525E');
        $this->addSql('ALTER TABLE item DROP FOREIGN KEY FK_1F1B251E4EBEBC6C');
        $this->addSql('ALTER TABLE comment_media DROP FOREIGN KEY FK_C3B639FDC7F4A74B');
        $this->addSql('ALTER TABLE media_person DROP FOREIGN KEY FK_88A54BA8EA9FDD75');
        $this->addSql('ALTER TABLE media_type DROP FOREIGN KEY FK_4F9988FAEA9FDD75');
        $this->addSql('ALTER TABLE user_media DROP FOREIGN KEY FK_88EE5A54EA9FDD75');
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10C46752A16');
        $this->addSql('ALTER TABLE media_person DROP FOREIGN KEY FK_88A54BA8217BBB47');
        $this->addSql('ALTER TABLE media_type DROP FOREIGN KEY FK_4F9988FAC54C8C93');
        $this->addSql('ALTER TABLE comment_item DROP FOREIGN KEY FK_392D87F267B3B43D');
        $this->addSql('ALTER TABLE comment_media DROP FOREIGN KEY FK_C3B639FD67B3B43D');
        $this->addSql('ALTER TABLE item DROP FOREIGN KEY FK_1F1B251EA76ED395');
        $this->addSql('ALTER TABLE media DROP FOREIGN KEY FK_6A2CA10CA76ED395');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE user_media DROP FOREIGN KEY FK_88EE5A54A76ED395');
        $this->addSql('ALTER TABLE user_item DROP FOREIGN KEY FK_659A69D7A76ED395');
        $this->addSql('DROP TABLE comment_item');
        $this->addSql('DROP TABLE comment_media');
        $this->addSql('DROP TABLE item');
        $this->addSql('DROP TABLE item_category');
        $this->addSql('DROP TABLE media');
        $this->addSql('DROP TABLE media_person');
        $this->addSql('DROP TABLE media_type');
        $this->addSql('DROP TABLE media_category');
        $this->addSql('DROP TABLE person');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE type');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_media');
        $this->addSql('DROP TABLE user_item');
    }
}

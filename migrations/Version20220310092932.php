<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220310092932 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE about (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, cover VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, content VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE accounting (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, no_ref VARCHAR(255) NOT NULL, account_name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, credit DOUBLE PRECISION NOT NULL, debit DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE agenda (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, cover VARCHAR(255) DEFAULT NULL, content VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, cover VARCHAR(255) DEFAULT NULL, content VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, cover VARCHAR(255) DEFAULT NULL, address VARCHAR(255) DEFAULT NULL, city VARCHAR(255) DEFAULT NULL, country VARCHAR(255) DEFAULT NULL, phone VARCHAR(255) DEFAULT NULL, whatsapp VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE customer_credit (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, customer VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, amount VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE debt (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, supplier VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, amount VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE expense (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, amount VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gallery (id INT AUTO_INCREMENT NOT NULL, imageurl VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE homepage (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, decription VARCHAR(255) NOT NULL, cover VARCHAR(255) NOT NULL, section1title VARCHAR(255) NOT NULL, section1cover VARCHAR(255) NOT NULL, section1content VARCHAR(255) NOT NULL, section2title VARCHAR(255) NOT NULL, section2cover VARCHAR(255) NOT NULL, section2content VARCHAR(255) NOT NULL, footer VARCHAR(255) NOT NULL, footercover VARCHAR(255) NOT NULL, footercontent VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE income (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, amount VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inventori (id INT AUTO_INCREMENT NOT NULL, barcode VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, stock VARCHAR(255) NOT NULL, cost VARCHAR(255) NOT NULL, sell VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE invoice (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, customer VARCHAR(255) NOT NULL, customer_address VARCHAR(255) NOT NULL, customer_phone VARCHAR(255) NOT NULL, invoice_no VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, total_amount DOUBLE PRECISION NOT NULL, status VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE phonebook (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, company VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, website VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project (id INT AUTO_INCREMENT NOT NULL, start DATE NOT NULL, finish DATE NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE purchase (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, supplier VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, amount DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE services (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, cover VARCHAR(255) DEFAULT NULL, content VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE shipping (id INT AUTO_INCREMENT NOT NULL, sent_date DATE NOT NULL, from_location VARCHAR(255) NOT NULL, to_location VARCHAR(255) NOT NULL, arrival_date DATE NOT NULL, description VARCHAR(255) NOT NULL, lots_of_stuff VARCHAR(255) NOT NULL, total_amount DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE video (id INT AUTO_INCREMENT NOT NULL, youtube_url VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE about');
        $this->addSql('DROP TABLE accounting');
        $this->addSql('DROP TABLE agenda');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE customer_credit');
        $this->addSql('DROP TABLE debt');
        $this->addSql('DROP TABLE expense');
        $this->addSql('DROP TABLE gallery');
        $this->addSql('DROP TABLE homepage');
        $this->addSql('DROP TABLE income');
        $this->addSql('DROP TABLE inventori');
        $this->addSql('DROP TABLE invoice');
        $this->addSql('DROP TABLE phonebook');
        $this->addSql('DROP TABLE project');
        $this->addSql('DROP TABLE purchase');
        $this->addSql('DROP TABLE services');
        $this->addSql('DROP TABLE shipping');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE video');
    }
}

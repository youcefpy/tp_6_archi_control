<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241106165236 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE acteur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, ddn DATE NOT NULL, role VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE acteur_film (acteur_id INT NOT NULL, film_id INT NOT NULL, INDEX IDX_14B01103DA6F574A (acteur_id), INDEX IDX_14B01103567F5183 (film_id), PRIMARY KEY(acteur_id, film_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE film (id INT AUTO_INCREMENT NOT NULL, id_realisateur_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, duree TIME NOT NULL, annee_sortie DATE NOT NULL, INDEX IDX_8244BE22CCBEFF28 (id_realisateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE realisateur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, mot_de_passe VARCHAR(255) NOT NULL, role_liste_film_prefere VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE acteur_film ADD CONSTRAINT FK_14B01103DA6F574A FOREIGN KEY (acteur_id) REFERENCES acteur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE acteur_film ADD CONSTRAINT FK_14B01103567F5183 FOREIGN KEY (film_id) REFERENCES film (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE film ADD CONSTRAINT FK_8244BE22CCBEFF28 FOREIGN KEY (id_realisateur_id) REFERENCES realisateur (id)');
        $this->addSql('ALTER TABLE utilisateur_film ADD CONSTRAINT FK_4BC5D218FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE utilisateur_film ADD CONSTRAINT FK_4BC5D218567F5183 FOREIGN KEY (film_id) REFERENCES film (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE utilisateur_film DROP FOREIGN KEY FK_4BC5D218567F5183');
        $this->addSql('ALTER TABLE utilisateur_film DROP FOREIGN KEY FK_4BC5D218FB88E14F');
        $this->addSql('ALTER TABLE acteur_film DROP FOREIGN KEY FK_14B01103DA6F574A');
        $this->addSql('ALTER TABLE acteur_film DROP FOREIGN KEY FK_14B01103567F5183');
        $this->addSql('ALTER TABLE film DROP FOREIGN KEY FK_8244BE22CCBEFF28');
        $this->addSql('DROP TABLE acteur');
        $this->addSql('DROP TABLE acteur_film');
        $this->addSql('DROP TABLE film');
        $this->addSql('DROP TABLE realisateur');
        $this->addSql('DROP TABLE utilisateur');
    }
}

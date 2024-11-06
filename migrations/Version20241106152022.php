<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241106152022 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE acteur_film (acteur_id INT NOT NULL, film_id INT NOT NULL, INDEX IDX_14B01103DA6F574A (acteur_id), INDEX IDX_14B01103567F5183 (film_id), PRIMARY KEY(acteur_id, film_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur_film (utilisateur_id INT NOT NULL, film_id INT NOT NULL, INDEX IDX_4BC5D218FB88E14F (utilisateur_id), INDEX IDX_4BC5D218567F5183 (film_id), PRIMARY KEY(utilisateur_id, film_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE acteur_film ADD CONSTRAINT FK_14B01103DA6F574A FOREIGN KEY (acteur_id) REFERENCES acteur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE acteur_film ADD CONSTRAINT FK_14B01103567F5183 FOREIGN KEY (film_id) REFERENCES film (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE utilisateur_film ADD CONSTRAINT FK_4BC5D218FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE utilisateur_film ADD CONSTRAINT FK_4BC5D218567F5183 FOREIGN KEY (film_id) REFERENCES film (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE participe DROP FOREIGN KEY participe_ibfk_1');
        $this->addSql('ALTER TABLE participe DROP FOREIGN KEY participe_ibfk_2');
        $this->addSql('ALTER TABLE regarde DROP FOREIGN KEY regarde_ibfk_1');
        $this->addSql('ALTER TABLE regarde DROP FOREIGN KEY regarde_ibfk_2');
        $this->addSql('DROP TABLE participe');
        $this->addSql('DROP TABLE regarde');
        $this->addSql('ALTER TABLE acteur ADD id INT AUTO_INCREMENT NOT NULL, DROP id_acteur, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE film DROP FOREIGN KEY film_ibfk_1');
        $this->addSql('DROP INDEX id_realisateur ON film');
        $this->addSql('ALTER TABLE film ADD id INT AUTO_INCREMENT NOT NULL, ADD id_realisateur_id INT DEFAULT NULL, DROP id_film, DROP id_realisateur, CHANGE annee_sortie annee_sortie DATE NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE film ADD CONSTRAINT FK_8244BE22CCBEFF28 FOREIGN KEY (id_realisateur_id) REFERENCES realisateur (id)');
        $this->addSql('CREATE INDEX IDX_8244BE22CCBEFF28 ON film (id_realisateur_id)');
        $this->addSql('ALTER TABLE realisateur CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('DROP INDEX email ON utilisateur');
        $this->addSql('ALTER TABLE utilisateur ADD id INT AUTO_INCREMENT NOT NULL, DROP id_user, CHANGE role_liste_film_prefere role_liste_film_prefere VARCHAR(255) NOT NULL, CHANGE mdp mot_de_passe VARCHAR(255) NOT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE participe (id_film INT NOT NULL, id_acteur INT NOT NULL, INDEX id_acteur (id_acteur), INDEX IDX_9FFA8D4964A220 (id_film), PRIMARY KEY(id_film, id_acteur)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_0900_ai_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE regarde (id_film INT NOT NULL, id_user INT NOT NULL, INDEX id_user (id_user), INDEX IDX_7D163CE4964A220 (id_film), PRIMARY KEY(id_film, id_user)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_0900_ai_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE participe ADD CONSTRAINT participe_ibfk_1 FOREIGN KEY (id_film) REFERENCES film (id_film) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE participe ADD CONSTRAINT participe_ibfk_2 FOREIGN KEY (id_acteur) REFERENCES acteur (id_acteur) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE regarde ADD CONSTRAINT regarde_ibfk_1 FOREIGN KEY (id_film) REFERENCES film (id_film) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE regarde ADD CONSTRAINT regarde_ibfk_2 FOREIGN KEY (id_user) REFERENCES utilisateur (id_user) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE acteur_film DROP FOREIGN KEY FK_14B01103DA6F574A');
        $this->addSql('ALTER TABLE acteur_film DROP FOREIGN KEY FK_14B01103567F5183');
        $this->addSql('ALTER TABLE utilisateur_film DROP FOREIGN KEY FK_4BC5D218FB88E14F');
        $this->addSql('ALTER TABLE utilisateur_film DROP FOREIGN KEY FK_4BC5D218567F5183');
        $this->addSql('DROP TABLE acteur_film');
        $this->addSql('DROP TABLE utilisateur_film');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE acteur MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON acteur');
        $this->addSql('ALTER TABLE acteur ADD id_acteur INT NOT NULL, DROP id');
        $this->addSql('ALTER TABLE acteur ADD PRIMARY KEY (id_acteur)');
        $this->addSql('ALTER TABLE film MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE film DROP FOREIGN KEY FK_8244BE22CCBEFF28');
        $this->addSql('DROP INDEX IDX_8244BE22CCBEFF28 ON film');
        $this->addSql('DROP INDEX `PRIMARY` ON film');
        $this->addSql('ALTER TABLE film ADD id_film INT NOT NULL, ADD id_realisateur INT NOT NULL, DROP id, DROP id_realisateur_id, CHANGE annee_sortie annee_sortie DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE film ADD CONSTRAINT film_ibfk_1 FOREIGN KEY (id_realisateur) REFERENCES realisateur (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX id_realisateur ON film (id_realisateur)');
        $this->addSql('ALTER TABLE film ADD PRIMARY KEY (id_film)');
        $this->addSql('ALTER TABLE realisateur CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE utilisateur MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON utilisateur');
        $this->addSql('ALTER TABLE utilisateur ADD id_user INT NOT NULL, DROP id, CHANGE role_liste_film_prefere role_liste_film_prefere VARCHAR(255) DEFAULT NULL, CHANGE mot_de_passe mdp VARCHAR(255) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX email ON utilisateur (email)');
        $this->addSql('ALTER TABLE utilisateur ADD PRIMARY KEY (id_user)');
    }
}

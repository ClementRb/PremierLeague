<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181205095955 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE coach (id INT AUTO_INCREMENT NOT NULL, team_id INT DEFAULT NULL, trophies_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, year VARCHAR(255) DEFAULT NULL, nationality VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_3F596DCC296CD8AE (team_id), INDEX IDX_3F596DCCDEB0ADA0 (trophies_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE player (id INT AUTO_INCREMENT NOT NULL, team_id INT DEFAULT NULL, game_goal_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, year VARCHAR(255) DEFAULT NULL, nationality VARCHAR(255) DEFAULT NULL, role VARCHAR(255) NOT NULL, goal INT NOT NULL, INDEX IDX_98197A65296CD8AE (team_id), INDEX IDX_98197A65F3BF65D1 (game_goal_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE owner (id INT AUTO_INCREMENT NOT NULL, team_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, year INT NOT NULL, nationality VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_CF60E67C296CD8AE (team_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE games (id INT AUTO_INCREMENT NOT NULL, result INT NOT NULL, result2 INT NOT NULL, date TIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE games_team (games_id INT NOT NULL, team_id INT NOT NULL, INDEX IDX_DB986AC697FFC673 (games_id), INDEX IDX_DB986AC6296CD8AE (team_id), PRIMARY KEY(games_id, team_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE trophies (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, year TIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE team (id INT AUTO_INCREMENT NOT NULL, trophies_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, year INT NOT NULL, coach VARCHAR(255) NOT NULL, stadium VARCHAR(255) DEFAULT NULL, number_of_titles INT DEFAULT NULL, logo VARCHAR(255) DEFAULT NULL, points INT DEFAULT NULL, win INT DEFAULT NULL, loses INT DEFAULT NULL, draws INT DEFAULT NULL, INDEX IDX_C4E0A61FDEB0ADA0 (trophies_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE coach ADD CONSTRAINT FK_3F596DCC296CD8AE FOREIGN KEY (team_id) REFERENCES team (id)');
        $this->addSql('ALTER TABLE coach ADD CONSTRAINT FK_3F596DCCDEB0ADA0 FOREIGN KEY (trophies_id) REFERENCES trophies (id)');
        $this->addSql('ALTER TABLE player ADD CONSTRAINT FK_98197A65296CD8AE FOREIGN KEY (team_id) REFERENCES team (id)');
        $this->addSql('ALTER TABLE player ADD CONSTRAINT FK_98197A65F3BF65D1 FOREIGN KEY (game_goal_id) REFERENCES games (id)');
        $this->addSql('ALTER TABLE owner ADD CONSTRAINT FK_CF60E67C296CD8AE FOREIGN KEY (team_id) REFERENCES team (id)');
        $this->addSql('ALTER TABLE games_team ADD CONSTRAINT FK_DB986AC697FFC673 FOREIGN KEY (games_id) REFERENCES games (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE games_team ADD CONSTRAINT FK_DB986AC6296CD8AE FOREIGN KEY (team_id) REFERENCES team (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE team ADD CONSTRAINT FK_C4E0A61FDEB0ADA0 FOREIGN KEY (trophies_id) REFERENCES trophies (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE player DROP FOREIGN KEY FK_98197A65F3BF65D1');
        $this->addSql('ALTER TABLE games_team DROP FOREIGN KEY FK_DB986AC697FFC673');
        $this->addSql('ALTER TABLE coach DROP FOREIGN KEY FK_3F596DCCDEB0ADA0');
        $this->addSql('ALTER TABLE team DROP FOREIGN KEY FK_C4E0A61FDEB0ADA0');
        $this->addSql('ALTER TABLE coach DROP FOREIGN KEY FK_3F596DCC296CD8AE');
        $this->addSql('ALTER TABLE player DROP FOREIGN KEY FK_98197A65296CD8AE');
        $this->addSql('ALTER TABLE owner DROP FOREIGN KEY FK_CF60E67C296CD8AE');
        $this->addSql('ALTER TABLE games_team DROP FOREIGN KEY FK_DB986AC6296CD8AE');
        $this->addSql('DROP TABLE coach');
        $this->addSql('DROP TABLE player');
        $this->addSql('DROP TABLE owner');
        $this->addSql('DROP TABLE games');
        $this->addSql('DROP TABLE games_team');
        $this->addSql('DROP TABLE trophies');
        $this->addSql('DROP TABLE team');
    }
}

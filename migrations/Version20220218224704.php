<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220218224704 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7FAE5F53EB5F299E ON promo_code_owner (pcd_email)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C1EFB8071376C53F ON promotion_code (pc_code)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_7FAE5F53EB5F299E ON promo_code_owner');
        $this->addSql('DROP INDEX UNIQ_C1EFB8071376C53F ON promotion_code');
    }
}
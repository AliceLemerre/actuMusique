<?php
namespace App\Models;
use App\Core\DB;

class Article extends DB
{
    private int $id_article;
    private string $title;
    private string $content;
    private string $created_at;
    private string $updated_at;

    public function __construct()
    {
        parent::__construct();
        $this->table = "ARTICLE"; // Définition du nom de la table
    }

    // Méthodes getters et setters pour les attributs

    public function getIdArticle(): int
    {
        return $this->id_article;
    }

    public function setIdArticle(int $id_article): void
    {
        $this->id_article = $id_article;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    public function setCreatedAt(string $created_at): void
    {
        $this->created_at = $created_at;
    }

    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(string $updated_at): void
    {
        $this->updated_at = $updated_at;
    }

    // Méthodes spécifiques pour interagir avec la table ARTICLE

    // Exemple : Récupérer un article par son ID
    public function getArticleById(int $id): ?Article
    {
        $data = $this->getOneBy(["ID_ARTICLE" => $id], "object");
        return $data; // Retourne un objet Article ou null s'il n'existe pas
    }

    
}

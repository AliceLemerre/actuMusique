<?php
namespace App\Models;
use App\Core\DB;

class Commentaire extends DB
{
    private int $id_commentaire;
    private string $auteur;
    private bool $statut;
    private string $created_at;
    private string $content;
    private string $updated_at;

    public function __construct()
    {
        parent::__construct();
        $this->table = "COMMENTAIRE"; // Définition du nom de la table
    }

    // Méthodes getters et setters pour les attributs

    public function getIdCommentaire(): int
    {
        return $this->id_commentaire;
    }

    public function setIdCommentaire(int $id_commentaire): void
    {
        $this->id_commentaire = $id_commentaire;
    }

    public function getAuteur(): string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur): void
    {
        $this->auteur = $auteur;
    }

    public function getStatut(): bool
    {
        return $this->statut;
    }

    public function setStatut(bool $statut): void
    {
        $this->statut = $statut;
    }

    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    public function setCreatedAt(string $created_at): void
    {
        $this->created_at = $created_at;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(string $updated_at): void
    {
        $this->updated_at = $updated_at;
    }

    // Méthodes spécifiques pour interagir avec la table COMMENTAIRE

    // Exemple : Récupérer un commentaire par son ID
    public function getCommentaireById(int $id): ?Commentaire
    {
        $data = $this->getOneBy(["ID_COMMENTAIRE" => $id], "object");
        return $data; // Retourne un objet Commentaire ou null s'il n'existe pas
    }


}

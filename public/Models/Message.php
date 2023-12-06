<?php
namespace App\Models;
use App\Core\DB;

class Message extends DB
{
    private int $id_message;
    private string $content;
    private string $receptor;
    private string $created_at;
    private string $updated_at;

    public function __construct()
    {
        parent::__construct();
        $this->table = "MESSAGE"; // Définition du nom de la table
    }

    // Méthodes getters et setters pour les attributs

    public function getIdMessage(): int
    {
        return $this->id_message;
    }

    public function setIdMessage(int $id_message): void
    {
        $this->id_message = $id_message;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getReceptor(): string
    {
        return $this->receptor;
    }

    public function setReceptor(string $receptor): void
    {
        $this->receptor = $receptor;
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

    // Méthodes spécifiques pour interagir avec la table MESSAGE

    // Exemple : Récupérer un message par son ID
    public function getMessageById(int $id): ?Message
    {
        $data = $this->getOneBy(["ID_MESSAGE" => $id], "object");
        return $data; // Retourne un objet Message ou null s'il n'existe pas
    }

    
}

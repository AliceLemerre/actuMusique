<?php
namespace App\Models;
use App\Core\DB;

class Avertissement extends DB
{
    private int $id_avertissement;
    private string $message_avertissement;
    private string $created_at;
    private string $updated_at;

    public function __construct()
    {
        parent::__construct();
        $this->table = "AVERTISSEMENT"; // Définition du nom de la table
    }

    // Méthodes getters et setters pour les attributs

    public function getIdAvertissement(): int
    {
        return $this->id_avertissement;
    }

    public function setIdAvertissement(int $id_avertissement): void
    {
        $this->id_avertissement = $id_avertissement;
    }

    public function getMessageAvertissement(): string
    {
        return $this->message_avertissement;
    }

    public function setMessageAvertissement(string $message_avertissement): void
    {
        $this->message_avertissement = $message_avertissement;
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

    // Méthodes spécifiques pour interagir avec la table AVERTISSEMENT

    // Exemple : Récupérer un avertissement par son ID
    public function getAvertissementById(int $id): ?Avertissement
    {
        $data = $this->getOneBy(["ID_AVERTISSEMENT" => $id], "object");
        return $data; // Retourne un objet Avertissement ou null s'il n'existe pas
    }


}

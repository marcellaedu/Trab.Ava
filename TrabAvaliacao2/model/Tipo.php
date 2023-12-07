<?php

class Tipo implements JsonSerializable{

    private ?int $id;
    private ?string $tipo;

    public function jsonSerialize() : array {
        return array("id" => $this->id,
        "tipo" => $this->tipo);
    }


    /**
     * Get the value of id
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo(?string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }
}
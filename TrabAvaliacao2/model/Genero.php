 <?php

class Genero{
    private ?int $id;
    private ?string $genero;
    private ?Tipo $tipo;


    public function __toString()
    {
        return $this->genero;
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
     * Get the value of genero
     */
    public function getGenero(): ?string
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     */
    public function setGenero(?string $genero): self
    {
        $this->genero = $genero;

        return $this;
    }

     /**
     * Get the value of tipo
     */
    public function getTipo(): ?Tipo
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo(?Tipo $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }
    
}
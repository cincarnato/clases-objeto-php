<?php


class File
{

    protected string $nombre;
    protected string $extension;
    protected string $pathRelativo;
    protected string $pathAbsoluto;
    protected string $size;

    /**
     * File constructor.
     * @param string $nombre
     * @param string $extension
     * @param string $pathRelativo
     * @param string $pathAbsoluto
     * @param string $size
     */
    public function __construct(string $nombre, string $extension, string $pathRelativo, string $pathAbsoluto, string $size)
    {
        $this->nombre = $nombre;
        $this->extension = $extension;
        $this->pathRelativo = $pathRelativo;
        $this->pathAbsoluto = $pathAbsoluto;
        $this->size = $size;
    }


    /**
     * @return string
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     */
    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return string
     */
    public function getExtension(): string
    {
        return $this->extension;
    }

    /**
     * @param string $extension
     */
    public function setExtension(string $extension): void
    {
        $this->extension = $extension;
    }

    /**
     * @return string
     */
    public function getPathRelativo(): string
    {
        return $this->pathRelativo;
    }

    /**
     * @param string $pathRelativo
     */
    public function setPathRelativo(string $pathRelativo): void
    {
        $this->pathRelativo = $pathRelativo;
    }

    /**
     * @return string
     */
    public function getPathAbsoluto(): string
    {
        return $this->pathAbsoluto;
    }

    /**
     * @param string $pathAbsoluto
     */
    public function setPathAbsoluto(string $pathAbsoluto): void
    {
        $this->pathAbsoluto = $pathAbsoluto;
    }

    /**
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }

    /**
     * @param string $size
     */
    public function setSize(string $size): void
    {
        $this->size = $size;
    }



}

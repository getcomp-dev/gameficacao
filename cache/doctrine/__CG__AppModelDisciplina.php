<?php

namespace App\Cache\Proxies\__CG__\App\Model;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Disciplina extends \App\Model\Disciplina implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'id', 'codigo', 'nome', 'carga', 'experiencia', 'fatorInteligencia', 'fatorCarisma', 'fatorSabedoria', 'fatorDestreza', 'fatorForca', 'notas', 'disciplinas_grade'];
        }

        return ['__isInitialized__', 'id', 'codigo', 'nome', 'carga', 'experiencia', 'fatorInteligencia', 'fatorCarisma', 'fatorSabedoria', 'fatorDestreza', 'fatorForca', 'notas', 'disciplinas_grade'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Disciplina $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodigo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodigo', []);

        return parent::getCodigo();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodigo($codigo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodigo', [$codigo]);

        return parent::setCodigo($codigo);
    }

    /**
     * {@inheritDoc}
     */
    public function getNome()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNome', []);

        return parent::getNome();
    }

    /**
     * {@inheritDoc}
     */
    public function setNome($nome)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNome', [$nome]);

        return parent::setNome($nome);
    }

    /**
     * {@inheritDoc}
     */
    public function getCarga()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCarga', []);

        return parent::getCarga();
    }

    /**
     * {@inheritDoc}
     */
    public function setCarga($carga)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCarga', [$carga]);

        return parent::setCarga($carga);
    }

    /**
     * {@inheritDoc}
     */
    public function getNotas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNotas', []);

        return parent::getNotas();
    }

    /**
     * {@inheritDoc}
     */
    public function getExperiencia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExperiencia', []);

        return parent::getExperiencia();
    }

    /**
     * {@inheritDoc}
     */
    public function setExperiencia($experiencia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExperiencia', [$experiencia]);

        return parent::setExperiencia($experiencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getFatorInteligencia()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFatorInteligencia', []);

        return parent::getFatorInteligencia();
    }

    /**
     * {@inheritDoc}
     */
    public function setFatorInteligencia($fatorInteligencia)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFatorInteligencia', [$fatorInteligencia]);

        return parent::setFatorInteligencia($fatorInteligencia);
    }

    /**
     * {@inheritDoc}
     */
    public function getFatorCarisma()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFatorCarisma', []);

        return parent::getFatorCarisma();
    }

    /**
     * {@inheritDoc}
     */
    public function setFatorCarisma($fatorCarisma)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFatorCarisma', [$fatorCarisma]);

        return parent::setFatorCarisma($fatorCarisma);
    }

    /**
     * {@inheritDoc}
     */
    public function getFatorSabedoria()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFatorSabedoria', []);

        return parent::getFatorSabedoria();
    }

    /**
     * {@inheritDoc}
     */
    public function setFatorSabedoria($fatorSabedoria)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFatorSabedoria', [$fatorSabedoria]);

        return parent::setFatorSabedoria($fatorSabedoria);
    }

    /**
     * {@inheritDoc}
     */
    public function getFatorDestreza()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFatorDestreza', []);

        return parent::getFatorDestreza();
    }

    /**
     * {@inheritDoc}
     */
    public function setFatorDestreza($fatorDestreza)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFatorDestreza', [$fatorDestreza]);

        return parent::setFatorDestreza($fatorDestreza);
    }

    /**
     * {@inheritDoc}
     */
    public function getFatorForca()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFatorForca', []);

        return parent::getFatorForca();
    }

    /**
     * {@inheritDoc}
     */
    public function setFatorForca($fatorForca)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFatorForca', [$fatorForca]);

        return parent::setFatorForca($fatorForca);
    }

    /**
     * {@inheritDoc}
     */
    public function setNotas($notas)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNotas', [$notas]);

        return parent::setNotas($notas);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdentifier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdentifier', []);

        return parent::getIdentifier();
    }

}

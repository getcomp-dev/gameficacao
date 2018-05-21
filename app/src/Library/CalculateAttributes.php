<?php

namespace App\Library;


use App\Model\Certificado;
use App\Model\Nota;
use App\Model\Usuario;

class CalculateAttributes
{

    public static function updateUsuarioCultura(Usuario $usuario)
    {
        $usuario->setCultura(0);

        // Calculo das Notas
        foreach ($usuario->getCertificados() as $certificado) {
            /** @var Certificado $certificado */
            if (!$certificado->getValido()) {
                continue;
            }

            $usuario->setExperiencia($usuario->getExperiencia() + 10)
                ->setCultura($usuario->getCultura() + 10);
        }
    }

    public static function calculateUsuarioStatistics(Usuario $usuario)
    {
        $usuario->setNivel(0)
            ->setExperiencia(0)
            ->setCarisma(0)
            ->setInteligencia(0)
            ->setSabedoria(0)
            ->setDestreza(0)
            ->setForca(0);

        // Calculo das Notas
        foreach ($usuario->getNotas() as $nota) {
            /** @var Nota $nota */
            if ($nota->getEstado() !== 'Aprovado') {
                continue;
            }

            $disciplina = $nota->getDisciplina();

            $usuario->setExperiencia($usuario->getExperiencia() + $nota->getDisciplina()->getExperiencia())
                ->setCarisma($usuario->getCarisma() + ($disciplina->getExperiencia() * ($disciplina->getFatorCarisma() / 100)))
                ->setInteligencia($usuario->getInteligencia() + ($disciplina->getExperiencia() * ($disciplina->getFatorInteligencia() / 100)))
                ->setSabedoria($usuario->getSabedoria() + ($disciplina->getExperiencia() * ($disciplina->getFatorSabedoria() / 100)))
                ->setDestreza($usuario->getDestreza() + ($disciplina->getExperiencia() * ($disciplina->getFatorDestreza() / 100)))
                ->setForca($usuario->getForca() + ($disciplina->getExperiencia() * ($disciplina->getFatorForca() / 100)));
        }

        CalculateAttributes::updateUsuarioCultura($usuario);
    }
}
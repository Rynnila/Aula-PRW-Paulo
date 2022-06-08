<?php
    class clinica{
        private $dados_gerais, $crm_medico, $cpf_medico, $nome_medico, $especialidade_medico, $cpf_paciente, $nome_paciente, $idade, $data, $horario, $senha_login, $tipo_login;

        public function getDadosGerais(){
            return $this->dados_gerais;
        }

        public function setDadosGerais(){
            $this->dados_gerais = $dados_gerais;
        }

        public function getCRMMedico(){
            return $this->crm_medico;
        }

        public function setCRMMedico(){
            $this->crm_medico = $crm_medico;
        }

        public function getCPFMedico(){
            return $this->$cpf_medico;
        }

        public function setCPFMedico(){
            $this->cpf_medico = $cpf_medico;
        }

        public function getNomeMedico(){
            return $this->$nome_medico;
        }

        public function setNomeMedico(){
            $this->nome_medico = $nome_medico;
        }

        public function getEspecialidadeMedico(){
            return $this->$especialidade_medico;
        }

        public function setEspecialidadeMedico(){
            $this->especialidade_medico = $especialidade_medico;
        }

        public function getCPFPaciente(){
            return $this->$cpf_paciente;
        }

        public function setCPFPaciente(){
            $this->cpf_paciente = $cpf_paciente;
        }

        public function getNomePaciente(){
            return $this->$nome_paciente;
        }

        public function setNomePaciente(){
            $this->nome_paciente = $nome_paciente;
        }

        public function getIdadePaciente(){
            return $this->$idade;
        }

        public function setIdadePaciente(){
            $this->idade = $idade;
        }

        public function getHorario(){
            return $this->$horario;
        }

        public function setHorario(){
            $this->horario = $horario;
        }

        public function getData(){
            return $this->$data;
        }
 
        public function setData(){
            $this->data = $data;
        }

        public function getSenhaLogin(){
            return $this->$senha_login;
        }

        public function setSenhaLogin(){
            $this->senha_login = $senha_login;
        }

        public function getTipoLogin(){
            return $this->$tipo_login;
        }
 
        public function setTipoLogin(){
            $this->tipo_login = $tipo_login;
        }
    }
?>
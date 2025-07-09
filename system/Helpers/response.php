<?php

function response() {
    return new class {
        public function json($data) {
            header('Content-Type: application/json');
            echo json_encode($data);
        }
    };
}

function request() {
    return new class {
        public function input() {
            return $_POST + $_GET;
        }

        public function validate(array $rules) {
            $data = $_POST + $_GET;
            return \Lieurcode\Core\Validator::make($data, $rules);
        }
    };
}

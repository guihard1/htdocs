<?php

include ('functions.php');

interface MetodoPagamento {

    public function pagar(float $valor): bool;
    public function getName(): string;

}

class Paypal implements MetodoPagamento {

    public function getName(): string
    {
        return 'Paypal';
    }

    public function pagar(float $valor): bool {

        return true;
    }
}

class CreditCard implements MetodoPagamento {

    public function getName(): string
    {
        return 'CARTÃO DE CRÉDITO';
    }

    public function pagar(float $valor): bool{

        return 'sucesso!';
    }
}

class Pix implements MetodoPagamento {

    public function getName(): string
    {
        return 'Pix';
    }

    private function gerarQrCode(float $valor): string {

        echo 'Gerando QR Code para pagamento via Pix...<br>';
        return 'QRCODE';
    }

    public function pagar(float $valor): bool {

        $qrCode = $this->gerarQrCode($valor);
        echo 'QR Code: '. $qrCode. '<br>';
        return true;
    }
}

$metodoPagamentoSelecionadoPeloUsuario = new Pix();

processarPagamento($metodoPagamentoSelecionadoPeloUsuario, 100);
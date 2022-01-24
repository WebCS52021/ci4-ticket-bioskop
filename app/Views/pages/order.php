<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    </br>
    <h2><?= $movies['movie_title'] ;?></h2> <!-- Ini Isi ama alamat title dari database -->
    </br>
    <div class="flex flex-row space-x-4">
        <div class="basis-1/4">
            <img src="/images/<?= $movies['movie_thumbnail']; ?>" width=150 height=150></img> <!-- Ini srcnya isi ama alamat image dari database -->
        </div>
        <div class="basis-2/3">
            <div class="box-content h-auto w-auto p-4 border-4 border-black">
                <div style="font-size: 11px; text-align: left; padding-left: 10px; margin-bottom: 10px; border-all: solid black 1px">
                    <p>Seats: </p>
                    <p>Ticket Price: <?= $movies['movie_price'] ;?></p>
                    <p>Studio: </p>
                    <p>Date: </p>
                    <p>Total Payment: <?= $movies['movie_price'] ;?></p>
                </div>
            </div>
        </div>
    </div>
    </br>
    <ul class="showcase">
        <li>
            <div class="seat">A</div>
            <small>Available</small>
        </li>
        <li>
            <div class="seat selected">S</div>
            <small>Selected</small>
        </li>
        <li>
            <div class="seat booked">B</div>
            <small>Booked</small>
        </li>
    </ul>
    <br>
    <h2 class="text-center">Layar Bioskop</h2>
    <br>
    <div class="row-order">
        <div class="seat">A1</div>
        <div class="seat">A2</div>
        <div class="seat">A3</div>
        <div class="seat">A4</div>
        <div class="seat">A5</div>
        <div class="seat">A6</div>
        <div class="seat">A7</div>
        <div class="seat">A8</div>
        <div class="seat">A9</div>
        <div class="seat">A10</div>
        <div class="seat">A11</div>
        <div class="seat">A12</div>
        <div class="seat">A13</div>
        <div class="seat">A14</div>
        <div class="seat">A15</div>
    </div>
    <div class="row-order">
        <div class="seat">B1</div>
        <div class="seat">B2</div>
        <div class="seat">B3</div>
        <div class="seat">B4</div>
        <div class="seat">B5</div>
        <div class="seat">B6</div>
        <div class="seat">B7</div>
        <div class="seat">B8</div>
        <div class="seat">B9</div>
        <div class="seat">B10</div>
        <div class="seat">B11</div>
        <div class="seat">B12</div>
        <div class="seat">B13</div>
        <div class="seat">B14</div>
        <div class="seat">B15</div>
    </div>
    <div class="row-order">
        <div class="seat">C1</div>
        <div class="seat">C2</div>
        <div class="seat">C3</div>
        <div class="seat">C4</div>
        <div class="seat">C5</div>
        <div class="seat">C6</div>
        <div class="seat">C7</div>
        <div class="seat">C8</div>
        <div class="seat">C9</div>
        <div class="seat">C10</div>
        <div class="seat">C11</div>
        <div class="seat">C12</div>
        <div class="seat">C13</div>
        <div class="seat">C14</div>
        <div class="seat">C15</div>
    </div>
    <div class="row-order">
        <div class="seat">D1</div>
        <div class="seat">D2</div>
        <div class="seat">D3</div>
        <div class="seat">D4</div>
        <div class="seat">D5</div>
        <div class="seat">D6</div>
        <div class="seat">D7</div>
        <div class="seat">D8</div>
        <div class="seat">D9</div>
        <div class="seat">D10</div>
        <div class="seat">D11</div>
        <div class="seat">D12</div>
        <div class="seat">D13</div>
        <div class="seat">D14</div>
        <div class="seat">D15</div>
    </div>
    <div class="row-order">
        <div class="seat">E1</div>
        <div class="seat">E2</div>
        <div class="seat">E3</div>
        <div class="seat">E4</div>
        <div class="seat">E5</div>
        <div class="seat">E6</div>
        <div class="seat">E7</div>
        <div class="seat">E8</div>
        <div class="seat">E9</div>
        <div class="seat">E10</div>
        <div class="seat">E11</div>
        <div class="seat">E12</div>
        <div class="seat">E13</div>
        <div class="seat">E14</div>
        <div class="seat">E15</div>
    </div>
    <div class="row-order">
        <div class="seat">F1</div>
        <div class="seat">F2</div>
        <div class="seat">F3</div>
        <div class="seat">F4</div>
        <div class="seat">F5</div>
        <div class="seat">F6</div>
        <div class="seat">F7</div>
        <div class="seat">F8</div>
        <div class="seat">F9</div>
        <div class="seat">F10</div>
        <div class="seat">F11</div>
        <div class="seat">F12</div>
        <div class="seat">F13</div>
        <div class="seat">F14</div>
        <div class="seat">F15</div>
    </div>
    <div class="row-order">
        <div class="seat">G1</div>
        <div class="seat">G2</div>
        <div class="seat">G3</div>
        <div class="seat">G4</div>
        <div class="seat">G5</div>
        <div class="seat">G6</div>
        <div class="seat">G7</div>
        <div class="seat">G8</div>
        <div class="seat">G9</div>
        <div class="seat">G10</div>
        <div class="seat">G11</div>
        <div class="seat">G12</div>
        <div class="seat">G13</div>
        <div class="seat">G14</div>
        <div class="seat">G15</div>
    </div>
    <br>
    <p class="text-center">
        Anda sudah memilih <span id="count">0 kursi dengan total seharga Rp. <span id="total">0</span>
    </p>
    <br>
    <div class="text-center">
        <button href="/pages/order/pembayaran" class="rounded-md" style="background-color:blue; color:white" href="/pages/pembayaran">Pesan</button>
    </div>
    </br>
    <br>
</div>
<script src="/js/orderscript.js"></script>

<?= $this->endSection(); ?>
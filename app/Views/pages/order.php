<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Navbar -->
<?= $this->include('layout/navbar'); ?>
<div class="flex flex-col items-center justify-center">
<h2 class="p-10 text-4xl"><?= $movies['movie_title']; ?></h2>
<div class="flex flex-row gap-10">
    <div class="flex flex-col justify-center items-center bg-white rounded-lg shadow p-5">
        <img src="/images/<?= $movies['movie_thumbnail']; ?>" width=250></img> <!-- Ini srcnya isi ama alamat image dari database -->
        <div class="box-content h-auto w-auto p-4 border-4 border-black">
            <div style="font-size: 11px; text-align: left; padding-left: 10px; margin-bottom: 10px; border-all: solid black 1px">
                <p class="text-xl">Harga Ticket: <?= $movies['movie_price']; ?></p>
                <p class="text-xl">Tanggal: <?php echo date("d-m-Y"); ?> </p>
            </div>
        </div>

    </div>
    <div class="seatStructure">
        <center>

            <table id="seatsBlock">
                <p id="notification"></p>
                <tr>
                    <td colspan="14">
                        <div class="screen">SCREEN</div>
                    </td>
                    <td rowspan="20">
                        <div class="smallBox blueBox">Selected Seat</div> <br />
                        <div class="smallBox redBox">Reserved Seat</div><br />
                        <div class="smallBox emptyBox">Empty Seat</div><br />
                    </td>

                    <br />
                </tr>

                <tr>
                    <td></td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td></td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                </tr>

                <tr>
                    <td>A</td>
                    <td><input type="checkbox" class="seats" value="A1"></td>
                    <td><input type="checkbox" class="seats" value="A2"></td>
                    <td><input type="checkbox" class="seats" value="A3"></td>
                    <td><input type="checkbox" class="seats" value="A4"></td>
                    <td><input type="checkbox" class="seats" value="A5"></td>
                    <td class="seatGap"></td>
                    <td><input type="checkbox" class="seats" value="A6"></td>
                    <td><input type="checkbox" class="seats" value="A7"></td>
                    <td><input type="checkbox" class="seats" value="A8"></td>
                    <td><input type="checkbox" class="seats" value="A9"></td>
                    <td><input type="checkbox" class="seats" value="A10"></td>
                    <td><input type="checkbox" class="seats" value="A11"></td>
                    <td><input type="checkbox" class="seats" value="A12"></td>
                </tr>

                <tr>
                    <td>B</td>
                    <td><input type="checkbox" class="seats" value="B1"></td>
                    <td><input type="checkbox" class="seats" value="B2"></td>
                    <td><input type="checkbox" class="seats" value="B3"></td>
                    <td><input type="checkbox" class="seats" value="B4"></td>
                    <td><input type="checkbox" class="seats" value="B5"></td>
                    <td></td>
                    <td><input type="checkbox" class="seats" value="B6"></td>
                    <td><input type="checkbox" class="seats" value="B7"></td>
                    <td><input type="checkbox" class="seats" value="B8"></td>
                    <td><input type="checkbox" class="seats" value="B9"></td>
                    <td><input type="checkbox" class="seats" value="B10"></td>
                    <td><input type="checkbox" class="seats" value="B11"></td>
                    <td><input type="checkbox" class="seats" value="B12"></td>
                </tr>

                <tr>
                    <td>C</td>
                    <td><input type="checkbox" class="seats" value="C1"></td>
                    <td><input type="checkbox" class="seats" value="C2"></td>
                    <td><input type="checkbox" class="seats" value="C3"></td>
                    <td><input type="checkbox" class="seats" value="C4"></td>
                    <td><input type="checkbox" class="seats" value="C5"></td>
                    <td></td>
                    <td><input type="checkbox" class="seats" value="C6"></td>
                    <td><input type="checkbox" class="seats" value="C7"></td>
                    <td><input type="checkbox" class="seats" value="C8"></td>
                    <td><input type="checkbox" class="seats" value="C9"></td>
                    <td><input type="checkbox" class="seats" value="C10"></td>
                    <td><input type="checkbox" class="seats" value="C11"></td>
                    <td><input type="checkbox" class="seats" value="C12"></td>
                </tr>

                <tr>
                    <td>D</td>
                    <td><input type="checkbox" class="seats" value="D1"></td>
                    <td><input type="checkbox" class="seats" value="D2"></td>
                    <td><input type="checkbox" class="seats" value="D3"></td>
                    <td><input type="checkbox" class="seats" value="D4"></td>
                    <td><input type="checkbox" class="seats" value="D5"></td>
                    <td></td>
                    <td><input type="checkbox" class="seats" value="D6"></td>
                    <td><input type="checkbox" class="seats" value="D7"></td>
                    <td><input type="checkbox" class="seats" value="D8"></td>
                    <td><input type="checkbox" class="seats" value="D9"></td>
                    <td><input type="checkbox" class="seats" value="D10"></td>
                    <td><input type="checkbox" class="seats" value="D11"></td>
                    <td><input type="checkbox" class="seats" value="D12"></td>
                </tr>

                <tr>
                    <td>E</td>
                    <td><input type="checkbox" class="seats" value="E1"></td>
                    <td><input type="checkbox" class="seats" value="E2"></td>
                    <td><input type="checkbox" class="seats" value="E3"></td>
                    <td><input type="checkbox" class="seats" value="E4"></td>
                    <td><input type="checkbox" class="seats" value="E5"></td>
                    <td></td>
                    <td><input type="checkbox" class="seats" value="E6"></td>
                    <td><input type="checkbox" class="seats" value="E7"></td>
                    <td><input type="checkbox" class="seats" value="E8"></td>
                    <td><input type="checkbox" class="seats" value="E9"></td>
                    <td><input type="checkbox" class="seats" value="E10"></td>
                    <td><input type="checkbox" class="seats" value="E11"></td>
                    <td><input type="checkbox" class="seats" value="E12"></td>
                </tr>

                <tr class="seatVGap"></tr>

                <tr>
                    <td>F</td>
                    <td><input type="checkbox" class="seats" value="F1"></td>
                    <td><input type="checkbox" class="seats" value="F2"></td>
                    <td><input type="checkbox" class="seats" value="F3"></td>
                    <td><input type="checkbox" class="seats" value="F4"></td>
                    <td><input type="checkbox" class="seats" value="F5"></td>
                    <td></td>
                    <td><input type="checkbox" class="seats" value="F6"></td>
                    <td><input type="checkbox" class="seats" value="F7"></td>
                    <td><input type="checkbox" class="seats" value="F8"></td>
                    <td><input type="checkbox" class="seats" value="F9"></td>
                    <td><input type="checkbox" class="seats" value="F10"></td>
                    <td><input type="checkbox" class="seats" value="F11"></td>
                    <td><input type="checkbox" class="seats" value="F12"></td>
                </tr>

                <tr>
                    <td>G</td>
                    <td><input type="checkbox" class="seats" value="G1"></td>
                    <td><input type="checkbox" class="seats" value="G2"></td>
                    <td><input type="checkbox" class="seats" value="G3"></td>
                    <td><input type="checkbox" class="seats" value="G4"></td>
                    <td><input type="checkbox" class="seats" value="G5"></td>
                    <td></td>
                    <td><input type="checkbox" class="seats" value="G6"></td>
                    <td><input type="checkbox" class="seats" value="G7"></td>
                    <td><input type="checkbox" class="seats" value="G8"></td>
                    <td><input type="checkbox" class="seats" value="G9"></td>
                    <td><input type="checkbox" class="seats" value="G10"></td>
                    <td><input type="checkbox" class="seats" value="G11"></td>
                    <td><input type="checkbox" class="seats" value="G12"></td>
                </tr>

                <tr>
                    <td>H</td>
                    <td><input type="checkbox" class="seats" value="H1"></td>
                    <td><input type="checkbox" class="seats" value="H2"></td>
                    <td><input type="checkbox" class="seats" value="H3"></td>
                    <td><input type="checkbox" class="seats" value="H4"></td>
                    <td><input type="checkbox" class="seats" value="H5"></td>
                    <td></td>
                    <td><input type="checkbox" class="seats" value="H6"></td>
                    <td><input type="checkbox" class="seats" value="H7"></td>
                    <td><input type="checkbox" class="seats" value="H8"></td>
                    <td><input type="checkbox" class="seats" value="H9"></td>
                    <td><input type="checkbox" class="seats" value="H10"></td>
                    <td><input type="checkbox" class="seats" value="H11"></td>
                    <td><input type="checkbox" class="seats" value="H12"></td>
                </tr>

                <tr>
                    <td>I</td>
                    <td><input type="checkbox" class="seats" value="I1"></td>
                    <td><input type="checkbox" class="seats" value="I2"></td>
                    <td><input type="checkbox" class="seats" value="I3"></td>
                    <td><input type="checkbox" class="seats" value="I4"></td>
                    <td><input type="checkbox" class="seats" value="I5"></td>
                    <td></td>
                    <td><input type="checkbox" class="seats" value="I6"></td>
                    <td><input type="checkbox" class="seats" value="I7"></td>
                    <td><input type="checkbox" class="seats" value="I8"></td>
                    <td><input type="checkbox" class="seats" value="I9"></td>
                    <td><input type="checkbox" class="seats" value="I10"></td>
                    <td><input type="checkbox" class="seats" value="I11"></td>
                    <td><input type="checkbox" class="seats" value="I12"></td>
                </tr>

                <tr>
                    <td>J</td>
                    <td><input type="checkbox" class="seats" value="J1"></td>
                    <td><input type="checkbox" class="seats" value="J2"></td>
                    <td><input type="checkbox" class="seats" value="J3"></td>
                    <td><input type="checkbox" class="seats" value="J4"></td>
                    <td><input type="checkbox" class="seats" value="J5"></td>
                    <td></td>
                    <td><input type="checkbox" class="seats" value="J6"></td>
                    <td><input type="checkbox" class="seats" value="J7"></td>
                    <td><input type="checkbox" class="seats" value="J8"></td>
                    <td><input type="checkbox" class="seats" value="J9"></td>
                    <td><input type="checkbox" class="seats" value="J10"></td>
                    <td><input type="checkbox" class="seats" value="J11"></td>
                    <td><input type="checkbox" class="seats" value="J12"></td>
                </tr>
            </table>
        </center>
    </div>
</div>
</div>





<form action="/pages/invoices/<?= $movies['slug']; ?>" method="post" class="bg-white shadow-md rounded p-10 w-1/2 mx-auto my-10">
    <div class="mb-3">
        <label class="block text-gray-700 text-sm font-medium mb-2" for="numseats">Jumlah ticket</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Jumlah Ticket" id="numseats" name="numseats" required>
    </div>
    <div class="mb-3">
        <label class="block text-gray-700 text-sm font-medium mb-2" for="seats">Tempat duduk</label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" placeholder="Tempat duduk" id="seats" name="seats" required>
    </div>
    <input class="hidden" type="text" id="date" name="date" value="<?= date("d-m-Y"); ?>">
    <div class="flex items-center justify-between mb-5">
        <button class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 " type="submit">Beli</button>
    </div>
</form>

<?= $this->endSection(); ?>
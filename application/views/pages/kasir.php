<div class="content-body">
            <section class="dashboard-ecommerce">
                <div class="card p-2">
                    <div class="row" style="line-height:2;">
                        <div class="col-lg-3 d-flex flex-wrap flex-column">
                            <table>
                                <tr>
                                    <td>Tanggal MRS</td>
                                    <td> : dddd, dd-MM-yyyy hh:mm</td>
                                </tr>
                                <tr>
                                    <td>No. Daftar</td>
                                    <td> : AEX00000-0000</td>
                                </tr>
                                <tr>
                                    <td>No. RM</td>
                                    <td> : 0000000</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td> : John Doe(L)</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td> : dd-MMMM-yyyy</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td> : Lorem, ipsum dolor.</td>
                                </tr>
                                <tr>
                                    <td>No. Telp</td>
                                    <td> : 0812-3456-7890</td>
                                </tr>
                                <tr>
                                    <td>Dokter</td>
                                    <td> : John Doe</td>
                                </tr>
                                <tr>
                                    <td>Pembayaran</td>
                                    <td> : UMUM</td>
                                </tr>
                                <tr>
                                    <td>Diagnosa</td>
                                    <td> : -------</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-lg-5 d-flex flex-wrap flex-row">
                            <div class="col-lg-5 ">
                                <form action="">
                                    <table style="line-height:3; width:100%; font-size:small;">
                                        <tr>
                                            <td>Diskon: </td>
                                            <td><input type="number" class="form-control" name="" id="" placeholder="0"></td>
                                        </tr>
                                    </table>
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-1">
                                        <button type="submit" class="btn btn-outline-primary"><i data-feather="plus"></i>Diskon</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-7">
                                <form action="">
                                    <table style="line-height:1; width:100%; font-size:small;">
                                        <tr>
                                            <td><span class="form-label">Biaya Admin: </span></td>
                                            <td><input type="number" class="form-control mx-2" name="" id="" placeholder="0"  disabled></td>
                                        </tr>
                                        <tr>
                                            <td><span class="form-label">Deposit: </span></td>
                                            <td><input type="number" class="form-control mx-2" name="" id="" placeholder="0"  disabled></td>
                                        </tr>
                                        <tr>
                                            <td><span class="form-label">Refund: </span></td>
                                            <td><input type="number" class="form-control mx-2" name="" id="" placeholder="0"  disabled></td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                           
                        </div>
                        <div class="col-lg-4">
                            <div class="col-lg-12">
                                <table style="line-height:1; width:100%; font-size:small;">
                                    <tr>
                                        <td><span class="form-label">Total Dibayar</span></td>
                                        <td><input type="number" class="form-control mx-2" name="" id="" placeholder="0"  disabled></td>
                                    </tr>
                                    <tr>
                                        <td><span class="form-label">Total Tagihan</span></td>
                                        <td><input type="number" class="form-control mx-2" name="" id="" placeholder="0"  disabled></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="row my-2">
                                <div class="col-lg-12">
                                    <div class="card border-primary px-1">
                                        Harus Dibayar :
                                        <div class="d-flex align-items-end flex-column bd-highlight pt-3">
                                            <div class="mt-auto p-2 bd-highlight">
                                                <h2>0</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-9 py-2">
                            <div class="d-flex flex-wrap flex-row">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-outline-primary dropdown-toggle mr-2" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Biaya Non Layanan
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Menu 1</a>
                                        <a class="dropdown-item" href="#">Menu 2</a>
                                        <a class="dropdown-item" href="#">Menu 3</a>
                                    </div>
                                </div>
                                <button class="btn btn-outline-primary mr-2">Diskon</button>
                                <button class="btn btn-outline-primary mr-2">Deposit</button>
                                <button class="btn btn-outline-primary mr-2">Refund</button>
                                <button class="btn btn-outline-primary mr-2">Voucher</button>
                                <button class="btn btn-outline-primary mr-2">Hutang</button>
                            </div>
                        </div>
                        <div class="col-lg-3 py-2">
                            <div class="d-flex align-items-end flex-column bd-highlight pt-1">
                                <div class="mt-auto bd-highlight">
                                    Keterangan Warna : <i data-feather="square" class="bg-danger"></i> Sudah Terbayar
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <table class="table">
                            <thead>
                                <th><a><i data-feather="square"></a></i> Bayar</th>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th>No. Kuitansi</th>
                                <th>Jumlah</th>
                                <th>Biaya</th>
                                <th>Diskon</th>
                                <th>Subtotal</th>
                                <th>Jenis Bayar</th>
                            </thead>
                            <tbody>
                                <tr id="row">
                                    <td colspan="9">
                                        <div class="form-check p-0">
                                            <a class="clickable"><i data-feather="plus"></i></a>
                                                <input type="checkbox" name="" id="">
                                                            VK: <?="1"?> Item
                                                </input>
                                        </div>
                                    </td>
                                </tr>
                                <tr id="row">
                                    <td colspan="9">
                                        <div class="form-check p-0 ml-2">
                                                <a class="clickable"><i data-feather="plus"></i></a>
                                                <input type="checkbox" name="" id="">
                                                    BIAYA KAMAR(RIB07092022-00001) : <?= "1"?> Item
                                                </input>
                                        </div>  
                                    </td>                             
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check p-0 ml-4">
                                                <input type="checkbox" name="" id="">
                                                </input>
                                        </div>  
                                    </td>
                                    <td>2022-09-07</td>
                                    <td>Sewa Ruang VK (Kamar Kamar VK 1)</td>
                                    <td></td>
                                    <td>1 Item</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>UMUM</td>
                                </tr>
                            </tbody>
                        </table>
                            
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="nav nav-tabs pt-2">
                                <li class="nav-item">
                                    <a class="nav-link active" id="payment1">
                                                <i data-feather="dollar-sign"></i>
                                                <span>Cara Bayar 1</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="payment2">
                                                <i data-feather="dollar-sign"></i>
                                                <span>Cara Bayar 2</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="payment3">
                                                <i data-feather="credit-card"></i>
                                                <span>Cara Bayar 3</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 d-flex flex-row">
                            <div class="col-md-6 d-flex flex-column">
                                <label class="pb-2 h4 " for="">Cara Bayar</label>
                                <label class="pb-2 h4 " for="">Nilai</label>
                            </div>
                            <div class="col-md-6 d-flex flex-column">
                                <select class="mb-2 border-primary rounded h4" name="" id="">
                                    <option value="cash">CASH</option>
                                    <option value="credit">CREDIT</option>
                                    <option value="debit">DEBIT</option>
                                </select>
                                <input class="border-primary rounded h4" type="number" name="" id="">
                            </div>
                        </div>
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4 d-flex flex-row">
                            <div class="col-md-6 d-flex flex-column">
                                <label class="pb-2 h4 " for="">Total Bayar :</label>
                                <label class="pb-2 h4 " for="">Kembalian :</label>
                            </div>
                            <div class="col-md-6 d-flex flex-column">
                                <input class="mb-2 border-primary rounded h4" type="number" name="" id="">
                                <input class="border-primary rounded h4" type="number" name="" id="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script>$(".clickable").click(function() {
            if($(this).parents('#row').next().hasClass('hidden'))
            {
                $(this).parents('#row').next().show();
                $(this).parents('#row').next().removeClass('hidden');
                $(this).parents('#row').next().addClass('shown');
            } else if($(this).parents('#row').next().hasClass('shown'))
            {
                $(this).parents('#row').next().hide();
                $(this).parents('#row').next().removeClass('shown');
                $(this).parents('#row').next().addClass('hidden');
            } else 
            {
                $(this).parents('#row').next().hide();
                // $(this).parents('#row').next().removeClass('shown');
                $(this).parents('#row').next().addClass('hidden');
            }});
        </script>
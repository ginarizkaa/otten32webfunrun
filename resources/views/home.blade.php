@extends('layouts.app')

@section('konten')
<div class="container">
    <div class="text-center">
        <h1>Halo, {{ Auth::user()->name }}</h1>
    </div>
        {{-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div> --}}
    @if ($exist > 0)
        {{-- <script>console.log({{ $dataPeserta }})</script> --}}
        @foreach ($dataPeserta as $item)
            {{ $item }} <br>

        @endforeach
        <br><br>
        @if ( ($dataPeserta[0]->racepack_flag) === 'N')
        
        @else

        @endif
        
        @if ( ($dataPeserta[0]->paid_flag) === 'N' )
            <div id="subJudul" class="bg-primary text-white text-center">
                <h3>Pembayaran</h3>
            </div>
            <br>
            <div class="text-center">
                <h5><b>Silahkan lakukan pembayaran ke rek BCA 0399128403 An. Anggi Ananda</b></h5>
                <br>
                <form action="">
                <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" onclick="pickFile()" id="imagetrf" placeholder="klik untuk pilih file">
                                <input type="file" hidden="true" onchange="onFilePicked()" class="form-control-file" id="inputFile" name="imagetrf">
                            </div>
                            <button width="50" style="width:50%; margin:auto" type="submit" class="btn btn-primary btn-block rounded-pill">upload</button>
                        </div>
                    </div>
                </form>
            </div>
            <br>
        @elseif( ($dataPeserta[0]->paid_flag) === 'P' )
            <div id="subJudul" class="bg-primary text-white text-center">
                <h3>Pembayaran</h3>
            </div>
            <div class="text-center">
                <b>Terimakasih telah melakukan pembayaran, status pendaftaran Anda sedang menuggu konfirmasi pembayaran. <br>
                    Silahkan tunggu paling lama 1x24 jam untuk proses selanjutnya. <br> Jangan lupa jaga kesehatan ya! :)</b>
            </div>
            <br>
        @else
            <p>silahkan cetak tiket</p>
            <p>dah bayar</p>
        @endif
        
        <div id="subJudul" class="bg-primary text-white text-center">
            <h3>Data Peserta</h3>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="no_identitas">{{ __('Nomor Identitas') }}</label>
                    <input type="text" class="form-control" value="{{ $dataPeserta[0]->no_identitas }}" readonly>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">{{ __('Jenis Kelamin') }}</label>
                    <input type="text" class="form-control" value="{{ $dataPeserta[0]->jenis_kelamin }}" readonly>
                </div>
                <div class="form-group">
                    <label>{{ __('Golongan Darah') }}</label>
                    <input type="text" class="form-control" value="{{ $dataPeserta[0]->gol_darah }}" readonly>
                </div>
                <div class="form-group">
                    <label>{{ __('Alamat Lengkap') }}</label>
                    <textarea class="form-control" readonly>{{ $dataPeserta[0]->alamat_peserta }}</textarea>
                </div>
                <div class="form-group">
                    <label>{{ __('Obat Pribadi') }}</label>
                    <textarea class="form-control" readonly>{{ $dataPeserta[0]->obat_pribadi }}</textarea>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>{{ __('Tempat Lahir') }}</label>
                    <input type="text" class="form-control" value="{{ $dataPeserta[0]->tempat_lahir }}" readonly>
                </div>
                <div class="form-group">
                    <label>{{ __('Tanggal Lahir') }}</label>
                    <input type="text" class="form-control" value="{{ $dataPeserta[0]->tanggal_lahir }}" readonly>
                </div>
                <div class="form-group">
                    <label>{{ __('Size Chart') }}</label>
                    <input type="text" class="form-control" value="{{ $dataPeserta[0]->size_chart }}" readonly>
                </div>
                <div class="form-group">
                    <label>{{ __('Riwayat Kesehatan') }}</label>
                    <textarea class="form-control" readonly>{{ $dataPeserta[0]->riwayat_kesehatan }}</textarea>
                </div>
                <div class="form-group">
                    <label>{{ __('Riwayat Kesehatan Keluarga') }}</label>
                    <textarea class="form-control" readonly>{{ $dataPeserta[0]->riwayat_kesehatan_kel }}</textarea>
                </div>
            </div>
        </div>
    @else
    <form action="{{ route('addPeserta') }}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="no_identitas">{{ __('Nomor Identitas') }}</label>
                    <input type="text" class="form-control" name="no_identitas" id="no_identitas" placeholder="32010034042918880" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">{{ __('Jenis Kelamin') }}</label>
                    <select class="custom-select" name="jenis_kelamin" id="jenis_kelamin" required>
                        <option value="">Pilih...</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                </div>
                <div class="form-group">
                    <label for="gol_darah">{{ __('Golongan Darah') }}</label>
                    <select class="custom-select" name="gol_darah" id="gol_darah" required>
                        <option value="">Pilih...</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="O">O</option>
                        <option value="AB">AB</option>
                    </select>
                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                </div>
                <div class="form-group">
                    <label for="alamat_peserta">{{ __('Alamat Lengkap') }}</label>
                    <textarea class="form-control is-invalid" name="alamat_peserta" id="alamat_peserta" placeholder="Required example textarea" required></textarea>
                    <div class="invalid-feedback">
                        Please enter a message in the textarea.
                    </div>
                </div>
                <div class="form-group">
                    <label for="obat_pribadi">{{ __('Obat Pribadi') }}</label>
                    <textarea class="form-control is-invalid" name="obat_pribadi" id="obat_pribadi" placeholder="Required example textarea" required></textarea>
                    <div class="invalid-feedback">
                        Please enter a message in the textarea.
                    </div>
                </div>
                <div class="form-group">
                    <label for="riwayat_kesehatan">{{ __('Riwayat Kesehatan') }}</label>
                    <textarea class="form-control is-invalid" name="riwayat_kesehatan" id="riwayat_kesehatan" placeholder="Required example textarea" required></textarea>
                    <div class="invalid-feedback">
                        Please enter a message in the textarea.
                    </div>
                </div>
                <div class="form-group">
                    <label for="riwayat_kesehatan_kel">{{ __('Riwayat Kesehatan Keluarga') }}</label>
                    <textarea class="form-control is-invalid" name="riwayat_kesehatan_kel" id="riwayat_kesehatan_kel" placeholder="Required example textarea" required></textarea>
                    <div class="invalid-feedback">
                        Please enter a message in the textarea.
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="tempat_lahir">{{ __('Tempat Lahir') }}</label>
                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Jakarta" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">{{ __('Tanggal Lahir') }}</label>
                    <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="MM/DD/YYYY" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="form-group">
                    <label for="size_chart">{{ __('Size Chart') }}</label>
                    <select class="custom-select" name="size_chart" id="size_chart" required>
                        <option value="">Pilih...</option>
                        <option value="XS">XS</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                    </select>
                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                </div>
                <div>
                    <div class="card">
                        <div class="card-header text-center">
                            Diagram Ukuran Kaos
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead class="text-center">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Length</th>
                                            <th scope="col">Width</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <th scope="row">XS</th>
                                            <td>66</td>
                                            <td>49</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">S</th>
                                            <td>68</td>
                                            <td>50</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">M</th>
                                            <td>70</td>
                                            <td>52</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">L</th>
                                            <td>72</td>
                                            <td>54</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">XL</th>
                                            <td>74</td>
                                            <td>57</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">XXL</th>
                                            <td>76</td>
                                            <td>60</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-6">
                @php
                    for($i = 8; $i <= 12; $i++){
                        $numbers[] = str_pad($i, 3, '0', STR_PAD_LEFT);
                    }

                    print_r($numbers);
                @endphp
            </div> --}}
            <div class="col-3">
                <button type="submit" class="btn btn-biru btn-block rounded-pill">submit</button>
            </div>
        </div>


    </form>
    @endif
    
    <script>
        function pilihFile(){
            $('#inputFile').click();
        }
    </script>
</div>
@endsection

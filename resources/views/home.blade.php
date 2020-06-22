@extends('layouts.app')

@section('konten')
<div class="container">
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
            {{ $item->no_identitas }} <br>
            {{ $item->jenis_kelamin }} <br>

        @endforeach
        
        {{-- @if ($dataPeserta->racepack_flag === 'N')
        <p>blm bisa ambil racepack bung</p>
            
        @elseif($dataPeserta->paid_flag === 'N')
            <p>blm bayar bung</p>
            
        @endif --}}
        <p>udah daftar bung</p>
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
    
</div>
@endsection

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
    <form action="">
        @csrf
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="noIdentitasInput">{{ __('Nomor Identitas') }}</label>
                    <input type="text" class="form-control" id="noIdentitasInput" placeholder="32010034042918880" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="form-group">
                    <label for="jenisKelaminInput">{{ __('Jenis Kelamin') }}</label>
                    <select class="custom-select" required>
                        <option value="">Pilih...</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                </div>
                <div class="form-group">
                    <label for="golDarahInput">{{ __('Golongan Darah') }}</label>
                    <select class="custom-select" required>
                        <option value="">Pilih...</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="O">O</option>
                        <option value="AB">AB</option>
                    </select>
                    <div class="invalid-feedback">Example invalid custom select feedback</div>
                </div>
                <div class="form-group">
                    <label for="alamatInput">{{ __('Alamat Lengkap') }}</label>
                    <textarea class="form-control is-invalid" id="alamatInput" placeholder="Required example textarea" required></textarea>
                    <div class="invalid-feedback">
                        Please enter a message in the textarea.
                    </div>
                </div>
                <div class="form-group">
                    <label for="obatInput">{{ __('Obat Pribadi') }}</label>
                    <textarea class="form-control is-invalid" id="obatInput" placeholder="Required example textarea" required></textarea>
                    <div class="invalid-feedback">
                        Please enter a message in the textarea.
                    </div>
                </div>
                <div class="form-group">
                    <label for="riwayatInput">{{ __('Riwayat Kesehatan') }}</label>
                    <textarea class="form-control is-invalid" id="riwayatInput" placeholder="Required example textarea" required></textarea>
                    <div class="invalid-feedback">
                        Please enter a message in the textarea.
                    </div>
                </div>
                <div class="form-group">
                    <label for="riwayatKelInput">{{ __('Riwayat Kesehatan Keluarga') }}</label>
                    <textarea class="form-control is-invalid" id="riwayatKelInput" placeholder="Required example textarea" required></textarea>
                    <div class="invalid-feedback">
                        Please enter a message in the textarea.
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="tempatLahirInput">{{ __('Tempat Lahir') }}</label>
                    <input type="text" class="form-control" id="tempatLahirInput" placeholder="Jakarta" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="form-group">
                    <label for="tanggalLahirInput">{{ __('Tanggal Lahir') }}</label>
                    <input type="date" class="form-control" id="tanggalLahirInput" placeholder="MM/DD/YYYY" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="form-group">
                    <label for="pekerjaanInput">{{ __('Pekerjaan') }}</label>
                    <input type="text" class="form-control" id="pekerjaanInput" placeholder="Pekerja Partai" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="form-group">
                    <label for="institusiInput">{{ __('Institusi') }}</label>
                    <input type="text" class="form-control" id="institusiInput" placeholder="PT. Nasdem" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="form-group">
                    <label for="sizeChartInput">{{ __('Size Chart') }}</label>
                    <select class="custom-select" required>
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
        </div>
    </form>
</div>
@endsection

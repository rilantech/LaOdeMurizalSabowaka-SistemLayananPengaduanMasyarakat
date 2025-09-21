<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TambahDataPengaduanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'id_pesan' => 'required|max:500',
            'nama_pengadu' => 'required|max:500',
            'gambar' => 'required|image|mimes:jpeg,jpg,png|max:5000',
            'lokasi' => 'required|max:500',
            'nomorhp' => 'required|max:500',
            'jenis_pengaduan' => 'required|max:500',
            'tanggal_kirim' => 'required|max:500',
            'isi_pengaduan' => 'required|max:500'
        ];
        
    }

    public function messages(): array
    {
        return [
            'id_pesan.required' => ':attribute Tidak Boleh Kosong',
            'nama_pengadu.required' => ':attribute Tidak Boleh Kosong',
            'gambar.required' => ':attribute Belum Di Upload',
            'lokasi.required' => ':attribute Tidak Boleh Kosong',
            'nomorhp.required' => ':attribute Tidak Boleh Kosong',
            'jenis_pengaduan.required' => ':attribute Tidak Boleh Kosong',
            'tanggal_kirim.required' => ':attribute Tidak Boleh Kosong',
            'isi_pengaduan.required' => ':attribute Tidak Boleh Kosong'
            

        ];
    }

    public function attributes(): array
    {
        return [
           
            'id_pesan' => 'Id Pesan',
            'nama_pengadu' => 'Nama Pengadu',
            'gambar' => 'Gambar',
            'lokasi' => 'Lokasi',
            'nomorhp' => 'No.HP Pelapor',
            'jenis_pengaduan' => 'Jenis Pengaduan',
            'tanggal_kirim' => 'Tanggal Kirim',
            'isi_pengaduan' => 'Isi Pengaduan'
        ];
    }

}

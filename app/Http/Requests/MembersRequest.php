<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Member;

class MembersRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        #$member = Member::find($this->members);

        switch ($this->method()) {
            case 'GET':
            case 'DELETE':
                {
                    return[];
                }
            case 'POST':
                {
                    return[
                        'kode_anggota' => 'required|unique:members',
                        'nama' => 'required',
                        'alamat' => 'required|max:60'
                    ];
                }
            case 'PUT':
            case 'PATCH':
                {
                    return[
                        'kode_anggota' => 'required',
                        'nama' => 'required',
                        'alamat' => 'required|max:60'
                    ];
                }
            default:break;
        }
    }
}

<?php

namespace App\Repositories;

use App\Models\Transactions;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TransactionsRepository
 * @package App\Repositories
 * @version April 3, 2019, 11:27 am UTC
 *
 * @method Transactions findWithoutFail($id, $columns = ['*'])
 * @method Transactions find($id, $columns = ['*'])
 * @method Transactions first($columns = ['*'])
*/
class TransactionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'qrcode_owner_id',
        'qrcode_id',
        'payment_method',
        'message',
        'amount',
        'status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Transactions::class;
    }
}

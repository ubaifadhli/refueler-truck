<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Transfer extends Model
{
    protected $fillable = [
        'end_time', 'rcpt_no', 'dl_type', 'met_prod', 'cntr_no', 'unit_msr', 'vol_grs', 'vol_t0', 'avg_temp', 'cpt_no',
        'del_path', 'add_no', 'add_id', 'add_txt', 'add_vol', 'vol_sum', 'start_time', 'ord_amnt', 'art_no', 'art_id',
        'art_txt', 'vol_weight', 'plan_id', 'ord_no', 'pmp_rate', 'del_stat', 'approved', 'pid_man', 'pid_serial',
        'pid_grade', 'object_id', 'gantry_id', 'connect_id', 'error', 'add_error', 'met_err', 'deviations', 'print_no',
        'stop_time', 'metp_no', 'tr_id', 'lr_id', 'lr_random', 'reseal_t', 'col_no', 'signature', 'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}

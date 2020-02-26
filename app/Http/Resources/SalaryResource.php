<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SalaryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'Month'=>$this->month,
            'Year'=>$this->year,
            'Salaries_payment_day'=> date('d', strtotime($this->payment_day)),
            'Bonus_payment_day'=> ($this->bonous_payment_day) ? date('d', strtotime($this->bonous_payment_day)): "",
            'Salaries_total'=>$this->Salaries_total,
            'Bonus_total'=>$this->Bonus_total,
            'Payments_total'=> $this->Salaries_total + $this->Bonus_total
        ];
    }
}

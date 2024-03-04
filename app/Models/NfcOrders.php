<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;

/**
 * App\Models\Plan
 *
 * @property int $id
 * @property string $name
 * @property int|null $no_of_vcards
 * @property int|null $currency_id
 * @property float|null $price
 * @property int $frequency 1 = Month, 2 = Year
 * @property int $is_default
 * @property int $trial_days Default validity will be 7 trial days
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Currency|null $currency
 * @property-read Collection|Subscription[] $hasZeroPlan
 * @property-read int|null $has_zero_plan_count
 * @property-read PlanFeature|null $planFeature
 * @property-read Collection|Subscription[] $subscriptions
 * @property-read int|null $subscriptions_count
 * @property-read Collection|Template[] $templates
 * @property-read int|null $templates_count
 *
 * @method static Builder|Plan newModelQuery()
 * @method static Builder|Plan newQuery()
 * @method static Builder|Plan query()
 * @method static Builder|Plan whereCreatedAt($value)
 * @method static Builder|Plan whereCurrencyId($value)
 * @method static Builder|Plan whereFrequency($value)
 * @method static Builder|Plan whereId($value)
 * @method static Builder|Plan whereIsDefault($value)
 * @method static Builder|Plan whereName($value)
 * @method static Builder|Plan whereNoOfVcards($value)
 * @method static Builder|Plan wherePrice($value)
 * @method static Builder|Plan whereTrialDays($value)
 * @method static Builder|Plan whereUpdatedAt($value)
 * @mixin Eloquent
 */
class NfcOrders extends Model
{
    use HasFactory;

    protected $table = 'nfc_orders';

    /**
     * @var array
     */
    protected $fillable = [
        'user',
        'order_status',   
        // 'currency_id',
        // 'price',
        // 'frequency',
        // 'is_default',
        // 'trial_days',
        // 'no_of_vcards',F
    ];

    protected $casts = [
        'user'         => 'string',
        'order_status' => 'int',
        

        
    ];


    /**
     * @var array
     */
    public static $rules = [
        'user'         => 'required|string|min:2|unique:plans,name,',
        'order_status' => 'nullable/integer'
        // 'currency_id'  => 'required',
        // 'no_of_vcards' => 'required|numeric',
    ];

   
}

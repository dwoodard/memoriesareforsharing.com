<x-mail::message>
# New order received

A Stripe order was completed on Memories Are For Sharing.

<x-mail::table>
| Field | Details |
| --- | --- |
| Customer | {{ $order['customer_name'] ?? 'Not available' }} |
| Email | {{ $order['customer_email'] ?? 'Not available' }} |
| Phone | {{ $order['customer_phone'] ?? 'Not available' }} |
| Total | {{ $order['amount_total_formatted'] ?? 'Not available' }} |
| Payment Status | {{ $order['payment_status'] ?? 'Not available' }} |
| Order Date | {{ $order['created_at'] ?? 'Not available' }} |
| Stripe Session | {{ $order['session_id'] ?? 'Not available' }} |
| Payment Intent | {{ $order['payment_intent'] ?? 'Not available' }} |
</x-mail::table>

@if (! empty($order['line_items']))
## Order Items

@foreach ($order['line_items'] as $item)
- **{{ $item['description'] ?? 'Item' }}**
  - Quantity: {{ $item['quantity'] ?? 1 }}
  - Amount: {{ $item['amount_total_formatted'] ?? 'Not available' }}
@endforeach
@endif

@if (! empty($order['metadata']))
## Metadata

@foreach ($order['metadata'] as $key => $value)
- **{{ $key }}:** {{ is_array($value) ? json_encode($value) : $value }}
@endforeach
@endif

<x-mail::button :url="'https://dashboard.stripe.com/payments/' . ($order['payment_intent'] ?? '')">
View in Stripe
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
<x-mail::message>
# Your session is reserved

Hi {{ $order['customer_name'] ?? 'there' }},

Thank you for your order with **Memories Are For Sharing**. Your payment has been received, and your recording session is reserved.

@if (! empty($order['line_items']))
## Order Summary

@foreach ($order['line_items'] as $item)
- **{{ $item['description'] ?? 'Recording Session' }}**
  - Quantity: {{ $item['quantity'] ?? 1 }}
  - Amount: {{ $item['amount_total_formatted'] ?? 'Not available' }}
@endforeach

**Total:** {{ $order['amount_total_formatted'] ?? 'Not available' }}
@endif

Shalyce will reach out personally soon to schedule your session and talk through the details.

Order reference:

`{{ $order['session_id'] ?? 'Not available' }}`

Thanks,<br>
Shalyce  
Memories Are For Sharing
</x-mail::message>
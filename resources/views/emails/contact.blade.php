<x-mail::message>
# New Inquiry

**Name:** {{ $data['name'] }}
**Email:** {{ $data['email'] }}
**Phone:** {{ $data['phone'] ?: '—' }}
**Package:** {{ $data['package'] ?: 'Not specified' }}

**Their message:**

{{ $data['message'] }}

<x-mail::button :url="'mailto:' . $data['email']">
Reply to {{ $data['name'] }}
</x-mail::button>

Memories Are For Sharing
</x-mail::message>
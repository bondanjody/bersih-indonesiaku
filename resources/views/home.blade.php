@extends('layouts.main')

@section('container')
<div class="mb-5">
    <h1 class="mb-4">Tahukah kamu ?</h1>
    <div class="d-flex justify-content-center">
        <img src="{{ asset('img/sampahgede.jpg') }}" alt="sampahgede.jpg" />
      </div>
    <p>Tingkat kebersihan di Indonesia masih terbilang rendah? Faktanya, hanya 20% dari total masyarakat Indonesia yang memiliki kepedulian terhadap kebersihan dan kesehatan lingkungan. Hal ini tentu saja membawa dampak negatif, seperti:</p>
    <ul>
        <li><strong>Penyakit</strong>: Kurangnya kesadaran akan kebersihan dapat menyebabkan berbagai penyakit, seperti ISPA dan diare.</li>
        <li><strong>Banjir</strong>: Kebiasaan membuang sampah sembarangan dapat menyumbat aliran sungai dan menyebabkan banjir.</li>
        <li><strong>Pencemaran Lingkungan</strong>: Sampah yang tidak dikelola dengan baik dapat mencemari tanah, air, dan udara.</li>
    </ul>
</div>
@endsection
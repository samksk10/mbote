@extends('layouts.app')

@section('title', 'Tableau de Bord')

@section('content')
<div class="container py-4">

    {{-- Titre --}}
    <div class="mb-4">
        <h2 class="fw-bold">Bienvenue, {{ Auth::user()->name ?? 'Utilisateur' }} 👋</h2>
        <p class="text-muted">Voici un aperçu rapide de votre activité.</p>
    </div>

    {{-- Cartes Statistiques --}}
    <div class="row g-4">

        {{-- Utilisateurs --}}
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">Utilisateurs</h5>
                    <h2 class="fw-bold">{{ $usersCount ?? 0 }}</h2>
                    <p class="text-muted mb-0">Total enregistrés</p>
                </div>
            </div>
        </div>

        {{-- Messages --}}
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">Messages</h5>
                    <h2 class="fw-bold">{{ $messagesCount ?? 0 }}</h2>
                    <p class="text-muted mb-0">Reçus aujourd’hui</p>
                </div>
            </div>
        </div>

        {{-- Ventes --}}
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">Ventes</h5>
                    <h2 class="fw-bold">{{ $salesCount ?? 0 }}</h2>
                    <p class="text-muted mb-0">Transactions effectuées</p>
                </div>
            </div>
        </div>

    </div>

    {{-- Section d’actions rapides --}}
    <div class="mt-5">
        <h4 class="fw-bold">Actions rapides</h4>

        <div class="d-flex gap-3 mt-3">

            <a href="{{ route('users.index') }}" class="btn btn-primary">
                Gérer les utilisateurs
            </a>

            <a href="{{ route('messages.index') }}" class="btn btn-outline-primary">
                Voir les messages
            </a>

            <a href="{{ route('sales.index') }}" class="btn btn-success">
                Voir les ventes
            </a>

        </div>
    </div>
</div>
@endsection
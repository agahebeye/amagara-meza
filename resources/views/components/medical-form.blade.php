<div class="text-right mr-3">N<sup>o</sup> Fiche: D950-53KSE/2023</div>

<div class="row mx-0 mt-3 px-0">
    <div class="col-6">
        <p class="mb-0">Nom</p>
        <p class="text-uppercase font-weight-bold">{{ $patient->last_name }}</p>
    </div>

    <div class="col-6">
        <p class="mb-0">Sexe</p>
        <p class="text-uppercase font-weight-bold">{{ $patient->gender }}</p>
    </div>

    <div class="col-6">
        <p class="mb-0">Post-Nom</p>
        <p class="text-uppercase font-weight-bold">{{ $patient->post_name }}</p>
    </div>

    <div class="col-6">
        <p class="mb-0">Date de naissance</p>
        <p class="text-uppercase font-weight-bold">{{ $patient->birth_date }}</p>
    </div>

    <div class="col-6">
        <p class="mb-0">Prénom</p>
        <p class="text-uppercase font-weight-bold">{{ $patient->first_name }}</p>
    </div>

    <div class="col-6">
        <p class="mb-0">Age</p>
        <p class="text-uppercase font-weight-bold">{{ now()->diffInYears(\Illuminate\Support\Carbon::parse($patient->birth_date)) }} ans</p>
    </div>

    <div class="col-12">
        <p class="mb-0">Adresse</p>
        <p class="text-uppercase font-weight-bold">{{ $patient->country }} {{ $patient->avenue}}/${{$patient->house_number}}</p>
    </div>

    <div class="col-6">
        <p class="mb-0">Père</p>
        <p class="text-uppercase font-weight-bold">{{ $patient->father_name}}</p>
    </div>

    <div class="col-6">
        <p class="mb-0">Mère</p>
        <p class="text-uppercase font-weight-bold">{{ $patient->mother_name }}</p>
    </div>


    <div class="col-6">
        <p class="mb-0">Profession</p>
        <p class="text-uppercase font-weight-bold">{{ $patient->profession }}</p>
    </div>

    <div class="col-6">
        <p class="mb-0">Nationalité</p>
        <p class="text-uppercase font-weight-bold">{{ $patient->nationality }}</p>
    </div>



    <table class="col-12 mt-3 ml-3 px-0">
        <tbody>
            <tr class="row">
                <td class="mb-0 col-6">Conjoint(e) ou proche parent à avertir en cas de besion</td>
                <td class="text-uppercase font-weight-bold mb-0 col-6">: {{ $patient->relative }} ({{$patient->relative_contact}})</td>
            </tr>
            <tr class="row">
                <td class="col-6">Charge / Assurance / Abonné</td>
                <td class="col-6 text-uppercase font-weight-bold mb-0">: {{ $complaint->care_type }}</td>
            </tr>
            <tr class="row">
                <td class="col-6">CS ou hôpital de rattachement</td>
                <td class="col-6 text-uppercase font-weight-bold">:</td>
            </tr>
            <tr class="row">
                <td class="col-6">Transfert de (CS, hôpital ou autre)</td>
                <td class="col-6 text-uppercase font-weight-bold">:</td>
            </tr>
        </tbody>
    </table>

    <table class="table table-bordered table-sm mt-5 ml-4">
        <tbody>
            <tr>
                <td colspan="2">Date de consultation: <span class="font-weight-bold">: {{ $complaint->date }}</span></td>
                <td class="border-0" colspan="2">N<sup>o</sup> Téléphone: <span class="font-weight-bold">: {{ $patient->phone_number }}</span></td>
            </tr>
            <tr>
                <td>Gueri:</td>
                <td>Amelioré:</td>
                <td>Non amelioré:</td>
                <td>Enfui:</td>
            </tr>
            <tr>
                <td colspan="3" class="font-weight-bold">Resumé clinique (A remplir par le médecin à la sortie du malade)</td>
                <td class="text-uppercase font-weight-bold">code oms</td>
            </tr>
            <tr>
                <td rowspan="8" colspan="3"></td>
                <td style="height: 23px"></td>
            </tr>

            <tr>
                <td colspan="3" class="text-uppercase">service</td>
            </tr>

            <tr>
                <td colspan="3" class="text-uppercase font-weight-bold">MED. INTERNE</td>
            </tr>

            <tr>
                <td class="p-0" colspan="3">
                    <table class="table mb-0 table-sm">
                        <tr class="w-100">
                            <td class="py-0 w-50">To</td>
                            <td class="py-0 font-weight-bold pl-3 w-50">{{ $complaint->temperature }}</td>
                        </tr>
                        <tr class="w-100">
                            <td class="py-0 w-50">TA</td>
                            <td class="py-0 font-weight-bold pl-3 w-50">{{ $complaint->blood_pressure }}</td>
                        </tr>
                        <tr class="w-10">
                            <td class="py-0 w-50">FR</td>
                            <td class="py-0 font-weight-bold pl-3 w-50">{{ $complaint->respiratory_rate }}</td>
                        </tr>
                        <tr class="w-100">
                            <td class="py-0 w-50">FC</td>
                            <td class="py-0 font-weight-bold pl-3 w-50">{{ $complaint->pulse_rate }}</td>
                        </tr>
                        <tr class="w-100">
                            <td class="py-0 w-50">Poids</td>
                            <td class="py-0 font-weight-bold pl-3 w-50">{{ $complaint->weight }}</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="department" value="{{ __('Department') }}" />
                <select name="department" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="-" selected>-</option>    
                    <option value="Office of the Director General (ODG)">Office of the Director General (ODG)</option>
                    <option value="Office of the Deputy Director General for Administration & Finance (ODDGAF)">Office of the Deputy Director General for Administration & Finance (ODDGAF)</option>
                    <option value="Office of the Deputy Director General for Legal (ODDGL)">Office of the Deputy Director General for Legal (ODDGL)</option>
                    <option value="Office of the Deputy Director General for Operations (ODDGO)">Office of the Deputy Director General for Operations (ODDGO)</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="office" value="{{ __('Office') }}" />
                <select name="office" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="-" selected>-</option>  
                    <option value="Better Regulations Office (BRO)">Better Regulations Office (BRO)</option>
                    <option value="Compliance Monitoring and Evaluation Office (CMEO)">Compliance Monitoring and Evaluation Office (CMEO)</option>
                    <option value="Finance and Administrative Office (FAO)">Finance and Administrative Office (FAO)</option>
                    <option value="Investigation, Enforcement and Litigation Office (IELO)">Investigation, Enforcement and Litigation Office (IELO)</option>
                    <option value="Legal and Public Assistance Office (LPAO)">Legal and Public Assistance Office (LPAO)</option>
                    <option value="Office of the Director General (ODG)">Office of the Director General (ODG)</option>
                    <option value="Office of the Deputy Director General for Administration & Finance (ODDGAF)">Office of the Deputy Director General for Administration & Finance (ODDGAF)</option>
                    <option value="Office of the Deputy Director General for Legal (ODDGL)">Office of the Deputy Director General for Legal (ODDGL)</option>
                    <option value="Office of the Deputy Director General for Operations (ODDGO)">Office of the Deputy Director General for Operations (ODDGO)</option>
                    <option value="Special Project Management Office (SPMO)">Special Project Management Office (SPMO)</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="div_unit" value="{{ __('Division / Unit / HEA / EA / AO') }}" />
                <select name="div_unit" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="-" selected>-</option>
                    <option value="Administrative Officer">Administrative Officer</option>
                    <option value="Better Regulation Division A (BRO A)">Better Regulation Division A (BRO A)</option>
                    <option value="Better Regulation Division B (BRO B)">Better Regulation Division B (BRO B)</option>
                    <option value="Better Regulation Division C (BRO C)">Better Regulation Division C (BRO C)</option>
                    <option value="Better Regulation Division D (BRO D)">Better Regulation Division D (BRO D)</option>
                    <option value="Compliance Monitoring and Evaluation Division A (CMED A)">Compliance Monitoring and Evaluation Division A (CMED A)</option> 
                    <option value="Compliance Monitoring and Evaluation Division B (CMED B)">Compliance Monitoring and Evaluation Division B (CMED B)</option> 
                    <option value="Compliance Monitoring and Evaluation Division C (CMED C)">Compliance Monitoring and Evaluation Division C (CMED C)</option> 
                    <option value="Compliance Monitoring and Evaluation Division D (CMED D)">Compliance Monitoring and Evaluation Division D (CMED D)</option>
                    <option value="Community and Multi-Sector Affairs Unit (CMSAU)">Community and Multi-Sector Affairs Unit (CMSAU)</option>
                    <option value="Director">Director</option>
                    <option value="Doing Business Division (DBD)">Doing Business Division (DBD)</option>
                    <option value="Executive Assistant (EA)">ODG Executive Assistant (EA)</option>
                    <option value="Executive Assistant (EA)">ODDGAF Executive Assistant (EA)</option>
                    <option value="Executive Assistant (EA)">ODDGL Executive Assistant (EA)</option>
                    <option value="Executive Assistant (EA)">ODDGO Executive Assistant (EA)</option>
                    <option value="Finance Division">Finance Division</option>
                    <option value="General Services Division (GSD)">General Services Division (GSD)</option>
                    <option value="Head Executive Assistant (HEA)">Head Executive Assistant (HEA)</option>
                    <option value="Human Resource Development Division (HRDD)">Human Resource Development Division (HRDD)</option> 
                    <option value="Information and Communications Technology Unit (ICTU)">Information and Communications Technology Unit (ICTU)</option> 
                    <option value="Investigation and Enforcement Division (IED)">Investigation and Enforcement Division (IED)</option>
                    <option value="Legal Division">Legal Division</option>
                    <option value="Litigation Division">Litigation Division</option>
                    <option value="Planning Unit">Planning Unit</option>
                    <option value="Public Assistance Division (PAD)">Public Assistance Division (PAD)</option>
                    <option value="Public Relations Unit (PRU)">Public Relations Unit (PRU)</option>
                    <option value="Regulatory Management and Training Division (RMTD)">Regulatory Management and Training Division (RMTD)</option>
                    <option value="Security and Intelligence">Security and Intelligence</option>
                    <option value="Special Project Management Teams (SPMT)">Special Project Management Teams (SPMT)</option>
                </select>
            </div>

            <!-- <div class="mt-4">
                <x-jet-label for="div_unit_id" value="{{ __('Division / Unit') }}" />
                <select name="div_unit_id" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="-" selected>-</option>    
                    <option value="8">Better Regulation Division A (BRO A)</option>
                    <option value="9">Better Regulation Division B (BRO B)</option>
                    <option value="10">Better Regulation Division C (BRO C)</option>
                    <option value="11">Better Regulation Division D (BRO D)</option>
                    <option value="12">Compliance Monitoring and Evaluation Division A (CMED A)</option> 
                    <option value="13">Compliance Monitoring and Evaluation Division B (CMED B)</option> 
                    <option value="14">Compliance Monitoring and Evaluation Division C (CMED C)</option> 
                    <option value="15">Compliance Monitoring and Evaluation Division D (CMED D)</option> 
                    <option value="3">Finance Division </option>
                    <option value="4">General Services Division (GSD)</option> 
                    <option value="5">Human Resource Development Division (HRDD)</option> 
                    <option value="6">Information and Communications Technology Unit (ICTU)</option> 
                    <option value="16">Investigation and Enforcement Division (IED)</option>
                    <option value="18">Legal Division </option>
                    <option value="17">Litigation Division </option>
                    <option value="16">Public Assistance Division (PAD)</option>
                    <option value="7">Public Relations Unit (PRU)</option>
                    <option value="1">Security and Intelligence (SI)</option>
                    <option value="2">Special Project Management Teams (SPMT)</option>
                </select>
            </div> -->

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

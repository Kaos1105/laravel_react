import { useEffect, FormEventHandler } from 'react';
import GuestLayout from '@/Layouts/GuestLayout';
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import { Head, useForm } from '@inertiajs/react';
import ApplicationLogo from "@/Components/ApplicationLogo";

export default function Login() {
    const { data, setData, post, processing, errors, reset } = useForm({
        login_id: '',
        password: '',
    });

    useEffect(() => {
        return () => {
            reset('password');
        };
    }, []);

    const submit: FormEventHandler = (e) => {
        e.preventDefault();
        post(route('login'));
    };

    return (
        <GuestLayout>
            <Head title="Log in" />
            <div className="">
                <ApplicationLogo/>
                <div className="card flex-col justify-content-center d-flex container-fluid">
                    <form onSubmit={submit} className="card-body">
                        <div>
                            <InputLabel className="form-label" value="Login Id" />

                            <TextInput
                                id="login_id"
                                name="login_id"
                                value={data.login_id}
                                className="form-control"
                                autoComplete="username"
                                isFocused={true}
                                onChange={(e) => setData('login_id', e.target.value)}
                            />

                            <InputError message={errors.login_id} className="mt-2" />
                        </div>

                        <div className="mt-4">
                            <InputLabel className="form-label" htmlFor="password" value="Password" />

                            <TextInput
                                id="password"
                                type="password"
                                name="password"
                                value={data.password}
                                className="form-control"
                                autoComplete="current-password"
                                onChange={(e) => setData('password', e.target.value)}
                            />

                            <InputError message={errors.password} className="mt-2" />
                        </div>

                        <PrimaryButton className="ml-4" disabled={processing} type="submit">
                            Log in
                        </PrimaryButton>
                    </form>
                </div>
            </div>
        </GuestLayout>
    );
}

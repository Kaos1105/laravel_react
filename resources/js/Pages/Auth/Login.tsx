import { useEffect, FormEventHandler } from 'react';
import GuestLayout from '@/Layouts/GuestLayout';
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import { Head, useForm } from '@inertiajs/react';
import ApplicationLogo from "@/Components/ApplicationLogo";

export default function Login() {
    const { data, setData, post, processing, errors, reset, isDirty, clearErrors } = useForm({
        login_id: '',
        password: '',
    });

    useEffect(() => {
        return () => {
            reset('password');
        };
    }, []);

    useEffect(()=>{
        clearErrors();
    }, [isDirty])

    const submit: FormEventHandler = (e) => {
        e.preventDefault();
        post(route('login'));
    };

    return (
        <GuestLayout>
            <Head title="Log in" />
            <div className="container">
                <div className="row">
                    <div className="col">
                        <ApplicationLogo/>
                    </div>
                    <div className="col card">
                        <form onSubmit={submit} className="card-body">
                            <div>
                                <div className="d-flex flex-row">
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
                                </div>
                                <InputError message={errors.login_id} className="mt-2" />
                            </div>

                            <div className="mt-4">
                                <div className="d-flex flex-row">
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
                                </div>
                                <InputError message={errors.password} className="mt-2" />
                            </div>

                            <PrimaryButton className="mt-2 align-content-center" disabled={processing} type="submit">
                                Log in
                            </PrimaryButton>
                        </form>
                    </div>
                </div>
            </div>
        </GuestLayout>
    );
}

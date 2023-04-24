import GuestLayout from '@/Layouts/GuestLayout';
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import {Head} from '@inertiajs/react';
import ApplicationLogo from "@/Components/ApplicationLogo";
import {useTranslation} from "react-i18next";
import {useCustomForm} from "@/hooks/formHook";
import yup from "@/plugins/yup";

type LoginForm = {
    login_id: '',
    password: ''
}

export default function Login() {
    const {t} = useTranslation();

    const loginScheme = yup.object().shape({
        login_id: yup.string().required().min(5).max(40),
        password: yup.string().required().min(5).max(40),
    });

    const formHook = useCustomForm<LoginForm>({
        initialValue: {
            login_id: '',
            password: '',
        },
        validationSchema: loginScheme,
        method: "post",
        submitUrl: route("login"),
    });

    return (
        <GuestLayout>
            <Head title="Log in" />
            <div className="container">
                <div className="row">
                    <div className="col">
                        <ApplicationLogo/>
                    </div>
                    <div className="col card">
                        <form onSubmit={formHook.formik.handleSubmit} className="card-body">
                            <div>
                                <div className="d-flex flex-row">
                                    <InputLabel className="form-label" value="Login Id" />
                                    <TextInput
                                        id="login_id"
                                        name="login_id"
                                        className="form-control"
                                        autoComplete="username"
                                        isFocused={true}
                                        onChange={(e) => formHook.handleChange('login_id', e)}
                                        onBlur={(e) => formHook.handleFocus('login_id', e)}
                                        value={formHook.formik.values.login_id}
                                    />
                                </div>
                                <InputError message={formHook.formik.errors.login_id} className="mt-2" />
                            </div>

                            <div className="mt-4">
                                <div className="d-flex flex-row">
                                    <InputLabel className="form-label" htmlFor="password" value="Password" />
                                    <TextInput
                                        id="password"
                                        type="password"
                                        name="password"
                                        className="form-control"
                                        autoComplete="current-password"
                                        onChange={(e) => formHook.handleChange('password', e)}
                                        onBlur={(e) => formHook.handleFocus('password', e)}
                                        value={formHook.formik.values.password}
                                    />
                                </div>
                                <InputError message={formHook.formik.errors.password} className="mt-2" />
                            </div>

                            <PrimaryButton className="mt-2 align-content-center" disabled={formHook.inertiaForm.processing || !formHook.formik.isValid} type="submit">
                                Log in
                            </PrimaryButton>
                        </form>
                    </div>
                </div>
            </div>
        </GuestLayout>
    );
}

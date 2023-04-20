import {ImgHTMLAttributes} from 'react';
import logo from "../../assets/images/qcsystem_logo.png"
import "../../scss/Component/ApplicationLogo.scss"

export default function ApplicationLogo(props: ImgHTMLAttributes<HTMLImageElement>) {
    return (
        <img alt="app logo" src={logo} className="notice-image"/>
    );
}


export interface User {
    id: number;
    name: string;
    login_id: string;
}

export type PageProps<T extends Record<string, unknown> = Record<string, unknown>> = T & {
    auth: {
        user: User;
    };
};

export interface MessageParams {
    path: string;
    value: any;
    originalValue: any;
    label: string;
    type: string;
}

"use client"; // this is a client component 👈🏽

import Image from "next/image";
import React, { useEffect, useState } from "react";

export default function Home() {
    const [contacts, setContats] = useState<any>([]);
    const [contact, setContact] = useState<any>({});
    const [searchString, setSearchString] = useState("");

    const fakeContacts = [
        { id: 1, name: "Linus Torvalds", phone: "(64) 99995-1234", description: "" },
        { id: 2, name: "Robert Cecil Martin", phone: "(64) 99995-1235", description: "" },
        { id: 3, name: "Tim Berners-Lee", phone: "(64) 99995-2345", description: "" },
        { id: 4, name: "Vaughn Vernon", phone: "(64) 99995-3462", description: "" },
        { id: 5, name: "Rodrigo Branas", phone: "(64) 99995-2341", description: "" },
        { id: 6, name: "Alan Turing", phone: "(64) 99995-6432", description: "" },
        { id: 7, name: "Rasmus Lerdorf", phone: "(64) 99995-3215", description: "" },
        { id: 8, name: "Elon Musk", phone: "(64) 99995-8765", description: "" },
        { id: 9, name: "Bjarne Stroustrup", phone: "(64) 99995-3233", description: "" },
        { id: 10, name: "Andrew Yu e Jolly Chen", phone: "(64) 99995-2222", description: "" },
        { id: 11, name: "Bitter", phone: "(64) 99995-4511", description: "" },
        { id: 12, name: "Murilo Lopes", phone: "(64) 99995-2211", description: "" },
        { id: 13, name: "Elon Musk", phone: "(64) 99995-4422", description: "" },
    ];

    useEffect(() => {
        setContact(fakeContacts[0]);
        setContats(fakeContacts);
    }, []);

    const handleSearch = (e: any) => {
        setSearchString(e.target.value);
    };
    const filteredContacts = contacts.filter((contact: any) =>
        contact.name.toLowerCase().includes(searchString.toLowerCase())
    );

    function handleDetail(contactDetail: any) {
        setContact(contactDetail);
    }

    return (
        <main className="flex min-h-screen flex-col items-center justify-between">
            <div className="header">
                <div className="profile">
                    <img src="https://i.imgur.com/QxlpUZl.png" alt="Image profile" />
                </div>
            </div>
            <div className="content">
                <div className="contacts">
                    <div className="search">
                        <input
                            type="text"
                            className="input"
                            placeholder="Search all contacts"
                            onChange={handleSearch}
                            value={searchString}
                        />
                    </div>
                    <div className="itens">
                        {filteredContacts.map((itemContact: any) => (
                            <div className="item" key={itemContact.id} onClick={() => handleDetail(itemContact)}>
                                <img src="https://i.imgur.com/Y326hv0.png" alt="" />
                                {itemContact.name}
                            </div>
                        ))}
                    </div>
                </div>
                <div className="detail">
                    <div className="card">
                        <div className="contact">
                            <img src="https://i.imgur.com/Y326hv0.png" alt="" />
                            <h2>{contact?.name}</h2>
                        </div>
                        <p className="phone-number">Phone: {contact?.phone}</p>
                        <p className="description">Bio: {contact.description}</p>
                    </div>
                </div>
            </div>
            <button className="save">+</button>
        </main>
    );
}

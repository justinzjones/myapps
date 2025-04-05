import SwiftUI

struct IntroView: View {
    let intro: AppContent
    
    var body: some View {
        VStack(alignment: .leading, spacing: 16) {
            Image(systemName: "airplane.departure")
                .font(.system(size: 40))
                .foregroundColor(.accentColor)
            
            Text(intro.title)
                .font(.title)
                .fontWeight(.bold)
            
            Text(intro.description)
                .font(.body)
                .foregroundColor(.secondary)
                .fixedSize(horizontal: false, vertical: true)
        }
        .padding()
        .frame(maxWidth: .infinity, alignment: .leading)
        .background(
            RoundedRectangle(cornerRadius: 16)
                .fill(Color(.systemBackground))
                .shadow(radius: 3)
        )
        .padding(.horizontal)
    }
} 